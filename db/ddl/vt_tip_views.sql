create table vt_tip_views (
    creation_date timestamp,
    tip_id integer,
    ip varchar(255)
);
create index vt_tip_views_n1 on vt_tip_views(ip);
