<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  class Collection implements Countable {

    protected $items = [];

    public function add($value) {
      $this->items[] = $value;
    }

    public function set($key, $value) {
      $this->items[$key] = $value;
    }

    public function toJson() {
      return json_encode($this->items);
    }

  }

  $c = new Collection();
  $c->add('Mohit');
  $c->add('Mayur');

  echo $c->toJson();
//Fatal error : Class Collection contains 1 abstract method and must therefore be declared abstract or implement the remaining
methods (Countable::count)
?>
