<?php

declare(strict_types=1);

namespace PackageVersions;

use OutOfBoundsException;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'dflydev/doctrine-orm-service-provider' => 'v2.0.1@84b3f4887a999cbd017010f758122d8409cccac0',
  'doctrine/annotations' => 'v1.8.0@904dca4eb10715b92569fbcd79e201d5c349b6bc',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => '2.12.0@2053eafdf60c2172ee1373d1b9289ba1db7f1fc6',
  'doctrine/dbal' => 'v2.10.1@c2b8e6e82732a64ecde1cddf9e1e06cb8556e3d8',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'doctrine/orm' => 'v2.7.2@dafe298ce5d0b995ebe1746670704c0a35868a6a',
  'doctrine/persistence' => '1.3.7@0af483f91bada1c9ded6c2cfd26ab7d5ab2094e0',
  'doctrine/reflection' => '1.2.0@b699ecc7f2784d1e49924fd9858cf1078db6b0e2',
  'illuminate/container' => 'v5.8.36@b42e5ef939144b77f78130918da0ce2d9ee16574',
  'illuminate/contracts' => 'v5.8.36@00fc6afee788fa07c311b0650ad276585f8aef96',
  'illuminate/events' => 'v5.8.36@a85d7c273bc4e3357000c5fc4812374598515de3',
  'illuminate/filesystem' => 'v5.8.36@494ba903402d64ec49c8d869ab61791db34b2288',
  'illuminate/support' => 'v5.8.36@df4af6a32908f1d89d74348624b57e3233eea247',
  'illuminate/view' => 'v5.8.36@c859919bc3be97a3f114377d5d812f047b8ea90d',
  'jenssegers/blade' => 'v1.1.0@59ba2cc4767b2ee81fdd9bad571a93c619a8dd52',
  'kylekatarnls/update-helper' => '1.2.0@5786fa188e0361b9adf9e8199d7280d1b2db165e',
  'nesbot/carbon' => '1.39.1@4be0c005164249208ce1b5ca633cd57bdd42ff33',
  'ocramius/package-versions' => '1.7.0@651c372efc914aea8223e049f85afaf65e09ba23',
  'pimple/pimple' => 'v3.3.0@e55d12f9d6a0e7f9c85992b73df1267f46279930',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'symfony/console' => 'v5.0.5@d29e2d36941de13600c399e393a60b8cfe59ac49',
  'symfony/debug' => 'v4.4.5@a980d87a659648980d89193fd8b7a7ca89d97d21',
  'symfony/finder' => 'v4.4.5@ea69c129aed9fdeca781d4b77eb20b62cf5d5357',
  'symfony/polyfill-ctype' => 'v1.14.0@fbdeaec0df06cf3d51c93de80c7eb76e271f5a38',
  'symfony/polyfill-mbstring' => 'v1.14.0@34094cfa9abe1f0f14f48f490772db7a775559f2',
  'symfony/polyfill-php73' => 'v1.14.0@5e66a0fa1070bf46bec4bea7962d285108edd675',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/translation' => 'v3.2.14@df36a48672b929bf3995eb62c58d83004b1d0d50',
  'symfony/yaml' => 'v2.8.52@02c1859112aa779d9ab394ae4f3381911d84052b',
  '__root__' => 'dev-master@6949acc9a39931d28844ede7fb8a39dc06181d7f',
);

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}