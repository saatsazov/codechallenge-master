select
    u.name,
    r.usertype
from
    role r
    join user u on u.id = r.userid
    join session s on s.id = r.sessionid
where
    s.active = 'Y'
order by
    s.name,
    u.name asc;