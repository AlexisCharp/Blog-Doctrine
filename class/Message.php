<?php

/** @Entity @Table(name="messages") **/

class Message {
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $text;
    /** @Column(type="date", nullable=true) **/
    private $datepost;

    //Get ID
    public function getId(){
        return($this->id);
    }
}
