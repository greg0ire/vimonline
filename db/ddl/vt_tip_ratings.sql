create table vt_tip_ratings (
    creation_date timestamp,
    tip_id integer,
    rating integer,
    ip varchar(255)
);
create index vt_tip_ratings_n1 on vt_tip_ratings(ip);
create index vt_tip_ratings_n2 on vt_tip_ratings(tip_id);
