<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace Tests\BitBag\SyliusCmsPlugin\Behat\Page\Admin\Page;

use Sylius\Behat\Page\Admin\Crud\CreatePageInterface as BaseCreatePageInterface;
use Tests\BitBag\SyliusCmsPlugin\Behat\Behaviour\ContainsErrorInterface;

interface CreatePageInterface extends BaseCreatePageInterface, ContainsErrorInterface
{
    public function fillField(string $field, string $value): void;

    public function uploadImage(string $image): void;

    public function fillCode(string $code): void;

    public function fillName(string $name): void;

    public function fillSlug(string $slug): void;

    public function fillMetaKeywords(string $metaKeywords): void;

    public function fillMetaDescription(string $metaDescription): void;

    public function fillContent(string $content): void;

    public function associateSections(array $sectionsNames): void;
}
