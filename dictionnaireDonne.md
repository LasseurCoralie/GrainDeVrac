# Dictionnaire de donnée

## datasPages (`datasPages`)

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| type | VARCHAR(255) | NOT NULL | homePageMessage/CGV/CGU/legalMention... |
| title | VARCHAR(255) | NULL | page's title |
| content | TEXT | NULL | page's content |
| image | BLOB | NULL | page's Image |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |


## product (`product`)

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| marketable | BOOL | NOT NULL, default(0) | is marketable ? (default false) |
| title | VARCHAR(255) | NOT NULL | homePageMessage's title |
| shortDescription | TEXT | NOT NULL | homePageMessage's content |
| description | TEXT | NOT NULL | homePageMessage's content |
| bio | BOOL | NOT NULL, default 0 | product is bio ? (default false) |
| origineId | INT, UNSIGNED | NOT NULL | contact's id |
| price | NUMBER | NOT NULL, UNSIGNED | product's price |
| availability | BOOL | NOT NULL, default 1 | product's availability |
| image | BLOB | NULL | homePageMessage's Image |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |

## Table many to many between recipe & contact

|name|Type|Specifications|Description|
|-|-|-|-|
| contactId | INT | NOT NULL, UNSIGNED, AUTO_INCREMENT | user's foreign key |
| productId | INT | NOT NULL, UNSIGNED, AUTO_INCREMENT | product's foreign 


## Table many to many between recipe & product

|name|Type|Specifications|Description|
|-|-|-|-|
| productId | INT | NOT NULL, UNSIGNED, AUTO_INCREMENT | product's foreign key |
| recipeId | INT | NOT NULL, UNSIGNED, AUTO_INCREMENT | recipe's foreign key |


## Table many to many between recipe & contact

|name|Type|Specifications|Description|
|-|-|-|-|
| contactId | INT | NOT NULL, UNSIGNED, AUTO_INCREMENT | user's foreign key |
| recipeId | INT | NOT NULL, UNSIGNED, AUTO_INCREMENT | recipe's foreign key |


## recipe (`recipe`)

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| title | VARCHAR(255) | NOT NULL | homePageMessage's title |
| shortDescription | TEXT | NOT NULL | homePageMessage's content |
| description | TEXT | NOT NULL | homePageMessage's content |
| indicativePrice | INT | NOT NULL | recipe indicative price |
| difficulty | INT | NOT NULL | recipe difficulty |
| saison | VARCHAR | NULL | recipe saison |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |


## steps (`steps`)

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| recipeId | NOT NULL, UNSIGNED | recipe foreign key's ID |
| step | TEXT | NOT NULL | step for recipe |
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

## contact (`contact`)

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| costumer | BOOL | NOT NULL | is a costumer or a producter ?|
| name | VARCHAR(255) | NOT NULL | contact's name |
| firstName | VARCHAR(255) | NOT NULL |contact's firstName |
| adress | TEXT | NOT NULL | contact's adress |
| cityID | INT | NOT NULL | city foreigner's key |
| country | TEXT | NOT NULL | contact's country |
| phone | VARCHAR(255) | NOT NULL | contact's phone |
| mail | VARCHAR(255) | NULL | contact's mail |
| mute | BOOL | NOT NULL, default(0) | contact is ban ? (default false) |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |


## message (`contact`)

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| title | VARCHAR(255) | NOT NULL | message's title |
| content | TEXT | NOT NULL | message's content |
| forwarder | INT | NOT NULL, UNSIGNED | message's forwarder |
| statu | INT | NOT NULL, UNSIGNED | message statu |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |

## messageStatus (`messageStatus`)

|name|Type| Specificitys |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| status | VARCHAR(255) | NOT NULL | unOpen, open, treat ...etc... |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |


## dates

|name|Type| Specificités |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| date | TIMESTAMP | NOT NULL, UNSIGNED | evenement's date |
| startHour | INT | NOT NULL, UNSIGNED | firt hour |
| endHour | INT | NOT NULL, UNSIGNED | last hour |
| cityId | INT | NOT NULL, UNSIGNED | City's id where the evenement gone's |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |


## city

|name|Type| Specificités |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| name | VARCHAR(255) | NOT NULL | name of city |
| departement | VARCHAR(255) | NOT NULL, UNSIGNED | number (VAR CHAR because of 02) of the french departement |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |