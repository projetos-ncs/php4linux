<?php
namespace  Controller;

class Index {
    public function index() {

        return '<h1>Hello World</h1><br>';

    }

  public function teste() {
      return __METHOD__;
  }
}
