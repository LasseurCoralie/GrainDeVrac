# Dictionnaire de donnée



## user (`user`)

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| roleId | INT | NOT NULL, UNSIGNED | user role |
| name | VARCHAR(255) | NOT NULL | contact's name |
| firstName | VARCHAR(255) | NOT NULL | contact's firstName |
| adress | TEXT | NOT NULL | contact's adress |
| cityID | INT | NOT NULL, UNSIGNED | city foreigner's key |
| country | TEXT | NOT NULL | contact's country |
| phone | VARCHAR(255) | NOT NULL | contact's phone |
| mail | VARCHAR(255) | NULL | contact's mail |
| mute | BOOL | NOT NULL, default(0) | contact is ban ? (default false) |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |


## product (`product`)

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| producerId | INT | NOT NULL, UNSIGNED | user (producer) key's ID |
| marketable | BOOL | NOT NULL, default(0) | is marketable ? (default false) |
| title | VARCHAR(255) | NOT NULL | homePageMessage's title |
| shortDescription | TEXT | NULL | homePageMessage's content |
| description | TEXT | NULL | homePageMessage's content |
| bio | BOOL | NULL, default 0 | product is bio ? (default false) |
| origineId | INT, UNSIGNED | NULL | contact's id |
| price | NUMBER | NULL, UNSIGNED | product's price |
| availability | BOOL | NOT NULL, default 1 | product's availability |
| image | BLOB | NULL | homePageMessage's Image |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |

## highlighted ('highlighted')

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| productId | INT | NOT NULL, UNSIGNED | product highlighted id |


## recipe (`recipe`)

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| title | VARCHAR(255) | NOT NULL | homePageMessage's title |
| shortDescription | TEXT | NOT NULL | homePageMessage's content |
| description | TEXT | NOT NULL | homePageMessage's content |
| indicativePriceId | INT | NOT NULL | recipe indicative price |
| difficultyId | INT | NOT NULL | recipe difficulty |
| stepId | INT | NOT NULL | step id  |
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
| recipeId | NOT NULL, UNSIGNED | recipe foreign key's ID |
| stepContent | TEXT | NOT NULL | step for recipe |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |


## difficulty (`difficulty`)

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| difficultyLevel | VARCHAR(255) | NOT NULL | difficulty's level |


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
| date | TIMESTAMP | NOT NULL, UNSIGNED | evenement's date |
| startHour | INT | NOT NULL, UNSIGNED | firt hour |
| endHour | INT | NOT NULL, UNSIGNED | last hour |
| cityId | INT | NOT NULL, UNSIGNED | City's id where the evenement gone's |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |


## city (`city`)

|name|Type| Specificités |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| name | VARCHAR(255) | NOT NULL | name of city |
| departement | VARCHAR(255) | NOT NULL, UNSIGNED | number (VAR CHAR because of 02) of the french departement |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |


## Table many to many between product & user

|name|Type|Specifications|Description|
|-|-|-|-|
| userId | INT | NOT NULL, UNSIGNED, AUTO_INCREMENT | user's foreign key |
| productId | INT | NOT NULL, UNSIGNED, AUTO_INCREMENT | product's foreign 


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