# prototype_data_api
Create dummy data for a client prototype using api calls

In hopes of creating a rapid prototype that appears to have real data in it, this api is a way
you can use REST to query from json files instead of having to mock a connection to a database.

This particular example has six .json files:
	authors_tbl				-	column names of the authors table
	books_tbl					- column names of the books table
	comparisons				- list of comparison operators used in a drop down list
	joins							- basic list of where the three tables can be joined and to what
	publishers_tbl		- column names of the publishers table
	tablelist					- list of the three tables in the system.  used in a drop down list

This is an improved version over v1.  The following are enhancements:

  -- Added a router
  -- Transparent file listing (The API posts the results of the files in /data and doesn't care about the method name)
  -- Doc root displays contents of all json files.

TODOs
-----

1.) Add a config file
2.) Add a View
3.) Add in a Model
4.) Add Create, Update and Delete methods

