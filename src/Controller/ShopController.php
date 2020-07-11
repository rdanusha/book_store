<?php

namespace App\Controller;

use App\Repository\CartRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShopController extends AbstractController
{

    private $uer_cart_id;
    private $cart;
    private $user;

    public function __construct(CartRepository $cart)
    {
        $this->cart = $cart;
        $this->user = 1; //TODO set logged user id
        $this->uer_cart_id = $cart->findOneBy(['user_id' => $this->user]);
    }

    /**
     * Shop landing page. Display all products
     * @Route("/", name="shop")
     */
    public function index(ProductRepository $products): Response
    {
        $cart_total = $this->cart->getCartTotal($this->uer_cart_id);
        $products = $products->findAll();

        return $this->render('shop/index.html.twig', ['products' => $products, 'cart_total' => $cart_total]);
    }

    /**
     * @Route("/shop/checkout", methods="GET|POST", name="checkout")
     */
    public function checkout(Request $request): Response
    {
        $cart_total = $this->cart->getCartTotal($this->uer_cart_id);
        $cart_items = $this->cart->getCartItems($this->uer_cart_id);
        $children_books_discount = $this->cart->getChildrenBooksDiscount($this->uer_cart_id, 5, 10);
        $additional_discount = 0;
        $coupon_discount = 0;
        $additional_discount_eligibility = $this->cart->checkAdditionalDiscountEligibility($this->uer_cart_id, 10);
        $coupon_code = '';
        if ($additional_discount_eligibility) {
            $additional_discount = $this->cart->getAdditionalDiscount($cart_total, 5);
        }

        if ($request->isMethod('POST')) {
            $coupon_code = $request->get('coupon_code');
            if ($coupon_code == 'DIS15') {
                $this->addFlash('success', 'created_successfully');
                $coupon_discount = $this->cart->getAdditionalDiscount($cart_total, 15);
                $additional_discount = 0;
                $children_books_discount = 0;
            }
        }

        $net_total = $cart_total - ($additional_discount + $children_books_discount + $coupon_discount);

        return $this->render('shop/checkout.html.twig', [
            'page_title' => 'Invoice',
            'cart_total' => $cart_total,
            'cart_items' => $cart_items,
            'additional_discount' => $additional_discount,
            'children_books_discount' => $children_books_discount,
            'coupon_discount' => $coupon_discount,
            'coupon_code' => $coupon_code,
            'net_total' => $net_total,
        ]);
    }
}
