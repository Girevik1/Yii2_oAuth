<?php
$clubs = ['1', '2', '3'];
1) Club;
- id;
- name;

2) Trainer;
-id;
-name
-club_id;

3) secie;
-id;
-name;
-club_id
-trainer_id;

4) sportsmen;
-id;
-username;
-club_id;

5) group;
- id;
- sportsmen_id;
- secie_id;
- trainer_id;

select count(*) from trainer join club on club.name = 'delfin' WHERE club.id = trainer.club_id; ;

