create table vt_tip_notes (
    tip_note_id integer auto_increment primary key,
    tip_id integer,
    note longtext, 
    last_updated_by_email varchar(100),
    last_update_date timestamp,
    created_by varchar(40),
    created_by_email varchar(100),
    creation_date timestamp
);
