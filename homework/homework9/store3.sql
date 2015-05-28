1.--------------------------------------------------------------------------------------------------------------

INSERT INTO `brands`(`brands_id`, `name`) VALUES (1,'Opel');
INSERT INTO `brands`(`brands_id`, `name`) VALUES (2,'BMW');
INSERT INTO `brands`(`brands_id`, `name`) VALUES (3,'vw');

INSERT INTO `regions`(`regions_id`, `name`, `country`) VALUES (1,'�����','BG');
INSERT INTO `regions`(`regions_id`, `name`, `country`) VALUES (2,'�����','BG');
INSERT INTO `regions`(`regions_id`, `name`, `country`) VALUES (3,'�������','BG');

INSERT INTO `cars`(`cars_id`, `color`, `year`, `brands_id`, `regions_id`) VALUES (1,'�����','2001', 1,1);
INSERT INTO `cars`(`cars_id`, `color`, `year`, `brands_id`, `regions_id`) VALUES (2,'����','2007', 2,2);
INSERT INTO `cars`(`cars_id`, `color`, `year`, `brands_id`, `regions_id`) VALUES (3,'������','2010',3,3);

---

ALTER TABLE cars
ADD FOREIGN KEY (regions_id)
REFERENCES regions (regions_id);

ALTER TABLE cars
ADD FOREIGN KEY (brands_id)
REFERENCES brands (brands_id);

------

UPDATE `brands` SET `brands_id`=1,`name`='KON' WHERE `name`='Opel';
UPDATE `regions` SET `regions_id`=1,`name`='KON', country='BG' WHERE `name`='�����';

UPDATE `brands` SET `brands_id`=1,`name`='Opel111' WHERE (`name`='KON' AND `brands_id`=1);

UPDATE `cars` SET `cars_id`=1,`color`='KON',`year`='2001',`brands_id`=1,`regions_id`=1 WHERE `color`='�����';