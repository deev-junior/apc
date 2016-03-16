CREATE TABLE settings
(
   id serial NOT NULL, 
   "key" text NOT NULL, 
   "value" text NOT NULL, 
   created timestamp with time zone NOT NULL DEFAULT NOW(), 
   last_modified timestamp with time zone NOT NULL DEFAULT NOW(), 
   CONSTRAINT settings_id_pk PRIMARY KEY (id), 
   CONSTRAINT key_unique UNIQUE ("key")
) 
WITH (
  OIDS = FALSE
)
;