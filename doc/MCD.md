```mermaid

erDiagram
    CATEGORIES |o --|{PRODUCTS: have
    CATEGORIES {
        INT id
        VARCHAR name
    }
    PRODUCTS {
        INT id
        VARCHAR title
        VARCHAR description
        FLOAT priceWT
        FLOAT weight
        FLOAT TVA
        INT stock
    }
    PRODUCTS_HAS_ORDER }| --o|PRODUCTS: have
    PRODUCTS_HAS_ORDER{
        INT quantity
    }
    ORDER || --o{PRODUCTS_HAS_ORDER: have
    ORDER {
        INT id
        DATE orderDate
        DATE deliveryDate
    }
    CLIENT || --o{ORDER:have
    CLIENT {
        INT id
        VARCHAR name
        VARCHAR surname
        VARCHAR email
        VARCHAR password
    }




```