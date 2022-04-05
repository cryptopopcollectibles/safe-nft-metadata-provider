<?php

/*
 * This file is part of the Safe NFT Metadata Provider package.
 *
 * (c) Marco Lipparini <developer@liarco.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Contract;

/**
 * @author Marco Lipparini <developer@liarco.net>
 */
interface MetadataUpdaterInterface
{
    /**
     * @param array<string, mixed> $metadata, $metadata1
     */
    public function updateMetadata(array &$metadata, array &$metadata1, int $tokenId, string $assetUri, string $assetUri1): void;
}
