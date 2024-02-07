# diagrammes liés au projet de site marchand
## diagramme de la base de données
```mermaid
erDiagram
    customers ||--o{ orders : places
    customers {
        string name
        string firstName
        string email
        string password
        int id
    }
    orders ||--|{ order_has_products : has
    orders {
        int id
        date orderDate
        date deliveryDate
        int customers_id
    }
	order_has_products  {
        int products_id
        int quantity
        int orders_id
    }
	products ||--|{ order_has_products : is_in
	products {
				int id
				string title
				string description
				decimal weight
				decimal priceWT
				decimal priceTTC
				decimal taxePrice
				int stock
				int categories_id
				int taxes_id
	}
	categories ||--|{ products : classifies
	categories {
				int id
				string name
	}
	taxes ||--|{ products : upPrice
		taxes {
				int id
				decimal taxeRate
	}
```
## diagramme de la gestion du panier
```mermaid
sequenceDiagram

	User->>productController.php: ?action=product
		productController.php-->>index.php: ?action=addToCart
		index.php ->> addToCartController.php:include
		addToCartController.php->>cart.php: addToCart()
		addToCartController.php->>index.php:?action=cart
	User->>index.php: ?action=cart
    index.php->>cartController.php: include
    cartController.php->>cart.php: initCart()
    cartController.php->>cart.php: fillCart(productId, $quantite)
	cartController.php->>cart.php: prices sorted by subTotalCart() totalCart()
	
	cartController.php-->> index.php: ?action=emptyCart
	index.php->>emptyCartController.php: include
	emptyCartController.php->> cart.php : emptyCart()
	emptyCartController.php->>index.php: ?action=cart
	
	cartController.php-->> index.php: ?action=modifyCart
	index.php ->> modifyCartController.php: include
	cart.php->>modifycart.php: modifyCart()
	modifycart.php->>index.php: ?action=cart
	
	cartController.php-->> index.php: ?action=deleteProductFromCart
	 index.php ->> deleteProductFromCartController.php: include
	 cart.php->>deleteProductFromCartController.php: deleteProductFromCart()
	 deleteProductFromCartController.php->>index.php:?action=cart
	 
    cartController.php->>cart.tpl.php: include
    cart.tpl.php -->>User: prices and info on cart
```
## diagramme de la validation du panier
```mermaid
sequenceDiagram

	User->>index.php:?action=validateCart
    index.php->>validateCartController.php: include
    validateCartController.php->>cart.php: validateCart($cart)
		cart.php->>BDD :verifyStock($pdo, $cart)
		cart.php->>BDD :createOrder($pdo)
		validateCartController.php->>validateCart.tpl.php: include
    validateCart.tpl.php -->>User: prices and info on Order
```