<?php

declare(strict_types=1);

namespace Modules\Media\Tests\Unit\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Modules\Media\Models\BaseModel;

beforeEach(function () {
    $this->baseModel = new class extends BaseModel
    {
=======
use Modules\Media\Models\BaseModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
=======
>>>>>>> f47166cc (.)
use Illuminate\Database\Eloquent\Model;
use Modules\Media\Models\BaseModel;

beforeEach(function () {
<<<<<<< HEAD
    $this->baseModel = new class extends BaseModel {
>>>>>>> f1053a51 (.)
=======
    $this->baseModel = new class extends BaseModel
    {
>>>>>>> f47166cc (.)
        protected $table = 'test_media_table';
    };
});

test('base model extends eloquent model', function () {
    expect($this->baseModel)->toBeInstanceOf(Model::class);
});

test('base model has correct table name', function () {
    expect($this->baseModel->getTable())->toBe('test_media_table');
});

test('base model can be instantiated', function () {
    expect($this->baseModel)->toBeInstanceOf(BaseModel::class);
});

test('base model has proper inheritance chain', function () {
    expect($this->baseModel)->toBeInstanceOf(BaseModel::class);
    expect($this->baseModel)->toBeInstanceOf(Model::class);
});

test('base model has timestamps enabled', function () {
    expect($this->baseModel->usesTimestamps())->toBeTrue();
});
