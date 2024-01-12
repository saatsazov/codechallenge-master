select
    name,
    session_start,
    session_end
from
    session
where
    active = 'Y'
order by
    name asc;