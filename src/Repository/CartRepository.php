<?php

namespace App\Repository;

use App\Entity\Cart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cart|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cart|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cart[]    findAll()
 * @method Cart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cart::class);
    }


    /**
     * get user cart
     */
    public function getUserCartId()
    {
        $temp_user = 1; //TODO set logged user id
        return $user_cart_id = $this->findOneBy(['user_id' => $temp_user]);
    }


    /**
     * get cart total
     * @param $cart_id
     * @return float|int
     */
    public function getCartTotal($cart_id)
    {
        if (!empty($cart_id)) {
            $item_prices = $this->find($cart_id)->getCartItems()->map(function ($item) {
                $product_price = $item->getProduct()->getPrice();
                $quantity = $item->getQuantity();
                $item_price = $product_price * $quantity;
                return $item_price;
            });
            return array_sum($item_prices->toArray());
        }
        return 0;
    }

    /**
     * get cart items
     * @param $cart_id
     * @return \App\Entity\CartItem[]|\Doctrine\Common\Collections\Collection
     */
    public function getCartItems($cart_id)
    {
        if (!empty($cart_id)) {
            return $this->find($cart_id)->getCartItems();
        }
    }

    /**
     * calculate children books discount
     * @param $cart_id
     * @param $max_items
     * @param $discount_rate
     * @return float|int
     */
    public function getChildrenBooksDiscount($cart_id, $max_items, $discount_rate)
    {
        $total_quantity = 0;
        $total_price = 0;
        $discount = 0;

        //get children books list
        $children_books = $this->find($cart_id)->getCartItems()->filter(function ($item) {
            $product = $item->getProduct();
            if ($product->getProductCategory()->getId() == 1) {
                return $item;
            }
        });

        //set total qty and price
        foreach ($children_books->toArray() as $children_book) {
            $total_quantity += $children_book->getQuantity();
            $product_price = $children_book->getProduct()->getPrice();
            $total_price += $children_book->getQuantity() * $product_price;
        }
        //check eligibility condition
        if ($total_quantity >= $max_items) {
            $discount = $total_price * $discount_rate / 100;
        }

        return $discount;

    }

    /**
     * check additional discount eligibility
     * @param $cart_id
     * @param $max_items
     * @return bool
     */
    public function checkAdditionalDiscountEligibility($cart_id, $max_items)
    {
        $cart_items = $this->find($cart_id)->getCartItems()->toArray();

        $children_books_count = 0;
        $fiction_books_count = 0;

        foreach ($cart_items as $item) {
            $product_category_id = $item->getProduct()->getProductCategory()->getId();
            if ($product_category_id == 1) {
                $children_books_count += $item->getQuantity();
            }
            if ($product_category_id == 2) {
                $fiction_books_count += $item->getQuantity();
            }
        }

        if (($children_books_count >= $max_items) && ($fiction_books_count >= $max_items)) {
            return true;
        }
        return false;
    }

    /**
     * get additional discount
     * @param $cart_total
     * @param $discount_rate
     * @return float|int
     */
    public function getAdditionalDiscount($cart_total, $discount_rate)
    {
        return $cart_total * $discount_rate / 100;

    }
}
