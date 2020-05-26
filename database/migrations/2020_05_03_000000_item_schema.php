<?php
use Illuminate\Database\Migrations\Migration;

class ItemSchema extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE TABLE item (
                        	id int NOT NULL AUTO_INCREMENT,
                        	item_category_id int NOT NULL,
                        	item_name varchar(255) NOT NULL,
                        	item_description varchar(255) NOT NULL,
                        	report_event_id int NOT NULL,
                        	report_event_date DATE NOT NULL,
                        	reporter_mssdn bigint NOT NULL,
                        	reporter_email varchar(255) NOT NULL,
                        	report_status_id int NOT NULL,
                        	report_event_location varchar(255) NOT NULL,
                        	create_date DATETIME NOT NULL,
                        	last_update DATETIME NOT NULL,
                        	PRIMARY KEY (id)
                        )");

        DB::unprepared(" CREATE TABLE item_category (id int NOT NULL AUTO_INCREMENT,
                                                                   name varchar(255) NOT NULL ,
                                                                    description TEXT NOT NULL,
                                                                    active BOOLEAN NOT NULL ,
                                                                    create_date DATETIME NOT NULL,
                                                                    PRIMARY KEY (id)
                                                )");

        DB::unprepared(" CREATE TABLE event (
                                      	id int NOT NULL AUTO_INCREMENT,
                                      	name varchar(255) NOT NULL,
                                      	description TEXT NOT NULL,
                                      	active BOOLEAN NOT NULL,
                                      	create_date DATETIME NOT NULL,
                                      	PRIMARY KEY (id)
                                                )");

        DB::unprepared(" CREATE TABLE report_status (
                                      	id int NOT NULL AUTO_INCREMENT,
                                      	name varchar(255) NOT NULL,
                                      	description TEXT NOT NULL,
                                      	active BOOLEAN NOT NULL,
                                      	create_date DATETIME NOT NULL,
                                      	PRIMARY KEY (id)
                                                )");

        DB::unprepared(" ALTER TABLE item ADD CONSTRAINT item_fk0 FOREIGN KEY (item_category_id) REFERENCES item_category(id);
                                                )");

        DB::unprepared(" ALTER TABLE item ADD CONSTRAINT item_fk1 FOREIGN KEY (report_event_id) REFERENCES event(id);
                                                   )");

        DB::unprepared(" ALTER TABLE item ADD CONSTRAINT item_fk2 FOREIGN KEY (report_status_id) REFERENCES report_status(id);

                                                      )");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }

}

