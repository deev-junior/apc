CREATE TABLE affiliates
(
   id serial NOT NULL, 
   site_name text NOT NULL, 
   site_key text NOT NULL, 
   modified_by text, 
   created timestamp with time zone NOT NULL DEFAULT NOW(), 
   last_modified timestamp with time zone NOT NULL DEFAULT NOW(),  
   CONSTRAINT affiliate_id_pk PRIMARY KEY (id),
   CONSTRAINT site_name_unique UNIQUE (site_name)
) 
WITH (
  OIDS = FALSE
);