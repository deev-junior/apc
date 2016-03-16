CREATE TABLE ad_scripts_ordering
(
   id serial, 
   iso_location_code text NOT NULL, 
   iso_country_code text NOT NULL, 
   script_order text NOT NULL, 
   modified_by text, 
   created timestamp with time zone NOT NULL DEFAULT NOW(), 
   last_modified timestamp with time zone NOT NULL DEFAULT NOW(),  
   CONSTRAINT ad_scripts_ordering_id_pk PRIMARY KEY (id), 
   CONSTRAINT ad_scripts_ordering_iso_location_code_iso_country_code_unique UNIQUE (iso_location_code, iso_country_code)
) 
WITH (
  OIDS = FALSE
)
;