2.------------------------------------------------------------------
SELECT 
	Code,
	Name,
	Continent,
	SurfaceArea
FROM
	country
WHERE
	(Continent = "South America" AND SurfaceArea < 13000)
OR
	(Continent = "Asia" AND SurfaceArea < 13000);