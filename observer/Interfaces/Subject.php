<?php

namespace Observer\Interfaces;

interface Subject
{
    public function registerObserver(Observer $o): void;
    public function removeObserver(Observer $o): void;
    public function notifyObserver(): void;
}