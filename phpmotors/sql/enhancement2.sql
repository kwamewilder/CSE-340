INSERT INTO clients( clientFirstName, clientLastName, clientEmail, clientPassword, clientLevel, comment) values ('Tony', 'Stark', 'tony@starkent.com', 'Iam1ronM@n', 1, 'I am the real Ironman')
UPDATE clients SET ClientLevel = 3
UPDATE inventory SET invDescription = REPLACE(invDescription, 'small', 'spacious') WHERE invId = 12
SELECT invModel,classificationName FROM inventory INNER JOIN carclassification ON inventory.classificationId = carclassification.classificationId WHERE inventory.classificationId = 1
DELETE FROM inventory WHERE invMake = 'Jeep'
UPDATE inventory SET invImage =concat('/phpmotors', invImage), invThumbnail =concat('/phpmotors', invThumbnail)