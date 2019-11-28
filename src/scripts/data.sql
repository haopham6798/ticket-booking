--insert cinema
INSERT INTO `cinema` (`cinema_id`, `cinema_number`) VALUES ('1', '16'), ('2', '14');

--insert customer
INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_gender`, `customer_bd`, `customer_email`, `customer_password`) 
VALUES (NULL, 'Hao', '1', '1998-11-05', 'hao@gmail.com', '1234');

--insert into
INSERT INTO `kind` (`kind_id`, `kind_name`) VALUES ('1', 'Action'), ('2', 'Detective');

INSERT INTO `movie` (`movie_id`, `movie_name`, `movie_length`, `movie_trailer`, `movie_picture`) 
VALUES ('1', 'Sherlock Holmes 1', '132', NULL, NULL);

INSERT INTO `movie_has_kind` (`movie_movie_id`, `kind_kind_id`) VALUES ('1', '2');

INSERT INTO `schedule` (`schedule_id`, `schedule_time_start`, `cinema_cinema_id`, `movie_movie_id`) 
VALUES ('1', '2019-11-06 00:00:00', '1', '1');
INSERT INTO `schedule` (`schedule_id`, `schedule_time_start`, `cinema_cinema_id`, `movie_movie_id`) 
VALUES ('3', '2019-11-13 09:00:00', '2', '2');

INSERT INTO `seat` (`seat_id`, `seat_vertical`, `seat_horizontal`) VALUES (NULL, '2', '3');

INSERT INTO `ticket` (`ticket_id`, `ticket_cost`, `ticket_date`, `customerr_customer_id`, `schedule_schedule_id`) 
VALUES (NULL, '12', '2019-11-05', '1', '1');