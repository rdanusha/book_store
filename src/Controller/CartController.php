<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Entity\CartItem;
use App\Repository\CartRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
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
     * List all Cart Items
     * @Route("shop/cart", methods="GET", name="cart")
     */
    public function index()
    {

        $cart_total = $this->cart->getCartTotal($this->uer_cart_id);
        $cart_items = $this->cart->getCartItems($this->uer_cart_id);

        return $this->render('cart/index.html.twig', [
            'cart_total' => $cart_total,
            'cart_items' => $cart_items,
        ]);
    }


    /**
     * Add or Update Cart Item
     *
     * @Route("shop/cart/add", methods="POST", name="add_to_cart")
     * @param Request $request
     * @return Response
     */
    public function new(Request $request, CartRepository $cart, ProductRepository $product): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        //get product id
        $product_id = $request->get('product_id');
        //find the product
        $product = $product->find($product_id);
        $new_quantity = 1;

        $user_id = 1; //TODO set logged user id
        //check user has a cart
        $user_cart = $cart->findOneBy(['user_id' => $user_id]);
        if (!$user_cart) {
            //if not create a new user cart
            $user_cart = new Cart();
            $user_cart->setUserId(1);
            $entityManager->persist($user_cart);
            $entityManager->flush();
        }

        //check product is already in the cart
        $cart_items_arr = $user_cart->getCartItems()->filter(function (CartItem $item) use ($product_id) {
            return $item->getProduct()->getId() == $product_id;
        });

        //if product in the cart update the current quantity
        if (count($cart_items_arr)) {
            $cart_item = $cart_items_arr->first();
            $old_quantity = $cart_item->getQuantity();
            $new_quantity = $old_quantity + 1;
            $cart_item->setQuantity($new_quantity);
        } else {
            //if product not in the cart add new item
            $cart_item = new CartItem();
            $cart_item->setQuantity($new_quantity);
            $cart_item->setProduct($product);
            $cart_item->setCart($user_cart);
            $user_cart->addCartItem($cart_item);
        }

        $entityManager->persist($cart_item);
        $entityManager->flush();

        return $this->redirectToRoute('cart');
    }

    /**
     * Deletes a Cart Item.
     *
     * @Route("shop/cart/{id}/delete", methods="POST", name="cart_item_delete")
     */
    public function delete(Request $request, CartItem $cart_item)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($cart_item);
        $entityManager->flush();
        return new JsonResponse(['type'=>'success']);
    }
}