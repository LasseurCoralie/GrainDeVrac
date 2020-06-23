# Dictionnaire de donnée

## demo (`demo`)

|name|Type| Specificités |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
|  |  |  |  |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |

## datasPages (`datasPages`)

|name|Type| Specificités |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| type | VARCHAR(255) | NOT NULL | homePageMessage/CGV/CGU/legalMention... |
| title | VARCHAR(255) | NULL | homePageMessage's title |
| content | TEXT | NULL | homePageMessage's content |
| image | BLOB | NULL | homePageMessage's Image |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |


## product (`product`)

|name|Type| Specificités |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| title | VARCHAR(255) | NOT NULL | homePageMessage's title |
| shortDescription | TEXT | NOT NULL | homePageMessage's content |
| description | TEXT | NOT NULL | homePageMessage's content |
| bio | BOOL | NOT NULL, default 0 | product is bio ? (default false) |
| origineId | INT, UNSIGNED | NOT NULL | origine's id |
| price | NUMBER | NOT NULL, UNSIGNED | product's price |
| availability | BOOL | NOT NULL, default 1 | product's availability |
| image | BLOB | NULL | homePageMessage's Image |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |

## Table many to many between recipe & product

|name|Type|Specifications|Description|
|-|-|-|-|
| productId | INT | NOT NULL, UNSIGNED, AUTO_INCREMENT | user's foreign key |
| recipeId | INT | NOT NULL, UNSIGNED, AUTO_INCREMENT | recipe's foreign key |

## recipe (`recipe`)

|name|Type| Specificités |Description|
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

## difficulty (`difficulty`)

|name|Type| Specificités |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| difficultyLevel | VARCHAR(255) | NOT NULL | difficulty's level |

## indicativePrice (`indicativePrice`)

|name|Type| Specificités |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| indicativePrice | VARCHAR(255) | NOT NULL | indicative price's level |

## contact (`contact`)

|name|Type| Specificités |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| custermer | BOOL | NOT NULL | is a custemer or a producter ?|
| name | VARCHAR(255) | NOT NULL | contact's name |
| firstName | VARCHAR(255) | NOT NULL |contact's firstName |
| adress | TEXT | NOT NULL | contact's adress |
| phone | VARCHAR(255) | NOT NULL | contact's phone |
| mail | VARCHAR(255) | NULL | contact's mail |
| mute | BOOL | NOT NULL, default(0) | contact is ban ? (default false) |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |

## message (`contact`)

|name|Type| Specificités |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| title | VARCHAR(255) | NOT NULL | message's title |
| content | TEXT | NOT NULL | message's content |
| forwarder | INT | NOT NULL, UNSIGNED | message's forwarder |
| statu | INT | NOT NULL, UNSIGNED | message statu |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |

## messageStatu (`messageStatu`)

|name|Type| Specificités |Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | number id |
| statu | VARCHAR(255) | NOT NULL | unOpen, open, treat ...etc... |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP, | created date |
| updated_at | TIMESTAMP | NULL | created upDate |