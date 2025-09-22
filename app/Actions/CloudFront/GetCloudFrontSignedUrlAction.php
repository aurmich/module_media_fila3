<?php

declare(strict_types=1);

namespace Modules\Media\Actions\CloudFront;

use Aws\CloudFront\CloudFrontClient;
use Modules\Media\Datas\CloudFrontData;
use Spatie\QueueableAction\QueueableAction;

<<<<<<< HEAD
=======

>>>>>>> b97b11d (.)
/**
 * Action per la traduzione di elementi di una collezione.
 */
class GetCloudFrontSignedUrlAction
{
    use QueueableAction;

<<<<<<< HEAD
    public function execute(string $key, int $expiry = 30): string
    {
        $data = CloudFrontData::make();

        $cloudFront = new CloudFrontClient([
            'region' => $data->region,
            'version' => 'latest',
=======
   
    public function execute(string $key, int $expiry = 30): string
    {
        $data = CloudFrontData::make();
        
        
        $cloudFront = new CloudFrontClient([
            'region' => $data->region,
            'version' => 'latest'
>>>>>>> b97b11d (.)
        ]);

        return $cloudFront->getSignedUrl([
            'url' => $data->base_url . '/' . ltrim($key, '/'),
            'expires' => time() + ($expiry * 60),
            'key_pair_id' => $data->key_pair_id,
<<<<<<< HEAD
            'private_key' => $data->getPrivateKey(),
        ]);
    }
=======
            'private_key' => $data->getPrivateKey()
            ,
        ]);
    }

   

  
>>>>>>> b97b11d (.)
}
