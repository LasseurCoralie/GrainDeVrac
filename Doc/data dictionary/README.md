# Dictionnaire de donnée



## user (`user`)

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| role | INT | NOT NULL, UNSIGNED | user role |
| name | VARCHAR(255) | NOT NULL | contact's name |
| firstName | VARCHAR(255) | NOT NULL | contact's firstName |
| adress | TEXT | NOT NULL | contact's adress |
| city | INT | NOT NULL, UNSIGNED | city foreigner's key |
| country | VARCHAR(255) | NOT NULL | contact's country |
| phone | VARCHAR(255) | NOT NULL | contact's phone |
| mail | VARCHAR(255) | NOT NULL | contact's mail |
| mute | BOOL | NOT NULL, default(0) | contact is ban ? (default false) |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |


## product (`product`)

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| producerId | INT | NOT NULL, UNSIGNED | user (producer) key's ID |
| name | VARCHAR(255) | NOT NULL | homePageMessage's title |
| shortDescription | TEXT | NULL | homePageMessage's content |
| description | TEXT | NULL | homePageMessage's content |
| bio | BOOL | NOT NULL, default 0 | product is bio ? (default false) |
| price | NUMBER | NULL, UNSIGNED | product's price |
| availability | BOOL | NOT NULL, default 1 | product's availability |
| image | BLOB | NULL | homePageMessage's Image |
| highlited | BOOL | NOT NULL, default 0 | is the product highlighted ? | 
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |

## recipe (`recipe`)

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| name | VARCHAR(255) | NOT NULL | homePageMessage's title |
| shortDescription | TEXT | NOT NULL | homePageMessage's content |
| description | TEXT | NOT NULL | homePageMessage's content |
| indicativePrice | INT | NOT NULL | recipe indicative price |
| difficulty | INT | NOT NULL | recipe difficulty |
| saison | VARCHAR | NULL | recipe saison |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |


## datasPage (`datasPage`)

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| type | VARCHAR(255) | NOT NULL | homePageMessage/CGV/CGU/legalMention... |
| title | VARCHAR(255) | NULL | page's title |
| content | TEXT | NULL | page's content |
| image | BLOB | NULL | page's Image |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |


## step (`step`)

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| recipe | NOT NULL, UNSIGNED | recipe foreign key's ID |
| stepContent | TEXT | NOT NULL | step for recipe |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |


## difficulty (`difficulty`)

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| level | VARCHAR(255) | NOT NULL | difficulty's level |


## indicativePrice (`indicativePrice`)

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| indicativePrice | VARCHAR(255) | NOT NULL | indicative price's level |


## role (`role`)

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| role | VARCHAR(255) | NOT NULL | custumer's role (admin, custumer, producter) |


## message (`message`)

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| title | VARCHAR(255) | NOT NULL | message's title |
| content | TEXT | NOT NULL | message's content |
| forwarderId | INT | NOT NULL, UNSIGNED | message's forwarder |
| statusId | INT | NOT NULL, UNSIGNED | foreigner key's status |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |


## messageStatus (`messageStatus`)

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| status | VARCHAR(255) | NOT NULL | unOpen, open, treat ...etc... |


## date (`date`)

|name|Type| Specificités |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| date | TIMESTAMP | NOT NULL | evenement's date |
| startHour | INT | NOT NULL, UNSIGNED | firt hour |
| endHour | INT | NOT NULL, UNSIGNED | last hour |
| cityId | INT | NOT NULL, UNSIGNED | City's id where the evenement gone's |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |
| mode | INT | NOT NULL | livraisons / marchée... |

## mode (`mode`)

|name|Type| Specificités |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| mode | VARCHAR(255) | NOT NULL | mode of delivery |



## city (`city`)

|name|Type| Specificités |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| city | VARCHAR(255) | NOT NULL | name of city |
| department | VARCHAR(255) | NOT NULL | number (VAR CHAR because of 02) of the french departement |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |


## ingredient (`ingredient`)

|name|Type| Specificités |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| name | VARCHAR(255) | NOT NULL | name of ingredient |
| recipe | INT | NOT NULL, UNSIGNED | recipe's id |


## Table many to many between product & user

|name|Type|Specifications|Description|
|-|-|-|-|
| user | INT | NOT NULL, UNSIGNED, AUTO_INCREMENT | user's foreign key |
| product | INT | NOT NULL, UNSIGNED, AUTO_INCREMENT | product's foreign 


## Table many to many between recipe & product

|name|Type|Specifications|Description|
|-|-|-|-|
| productId | INT | NOT NULL, UNSIGNED, AUTO_INCREMENT | product's foreign key |
| recipeId | INT | NOT NULL, UNSIGNED, AUTO_INCREMENT | recipe's foreign key |


## Table many to many between recipe & user

|name|Type|Specifications|Description|
|-|-|-|-|
| contactId | INT | NOT NULL, UNSIGNED, AUTO_INCREMENT | user's foreign key |
| recipeId | INT | NOT NULL, UNSIGNED, AUTO_INCREMENT | recipe's foreign key |
