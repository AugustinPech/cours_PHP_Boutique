```mermaid
---
shop
---
erDiagram
    PRODUCTS }o..|| CATEGORIES : has
    CATEGORIES {
        integer id
        string name
    }
    PRODUCTS {
        integer id
        string name
        string description
        decimal priceWithoutTax
        decimal VAT
        decimal weight
        integer stock
    }
    ORDERS }o..|{ PRODUCTS : contains
    ORDERS {
        integer id
        date registrationDate
        date deliveryDate
    }
    ORDERS ||--o{ COSTUMERS : has
    COSTUMERS {
        integer id
        string lastName
        string firstName
        string email
        srting password
    }

```
