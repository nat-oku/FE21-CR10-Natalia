CREATE TABLE library_stock(itemID INT(11) NOT  NULL AUTO_INCREMENT PRIMARY KEY,
                          mediaType VARCHAR(255) NOT  NULL, 
                          title VARCHAR(255) NOT  NULL,
                          authorFirstName VARCHAR(70) NOT  NULL,
                          authorLastName VARCHAR(70) NOT  NULL,
                          shortDesrc VARCHAR(255) NOT  NULL,
                          ISBN VARCHAR(13) NOT  NULL,
                          img TEXT DEFAULT NULL,
                          publishDate DATE,
                          publisherName VARCHAR(70) NOT  NULL,
                          size VARCHAR(20) NOT NULL,
                          status  VARCHAR(20) NOT NULL
                         ) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;