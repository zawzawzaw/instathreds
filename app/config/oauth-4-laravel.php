<?php

return array( 

    /*
    |--------------------------------------------------------------------------
    | oAuth Config
    |--------------------------------------------------------------------------
    */

    /**
     * Storage
     */
    'storage' => 'Session', 

    /**
     * Consumers
     */
    'consumers' => array(

        /**
         * Facebook
         */
        'Facebook' => array(
            'client_id'     => '484327941698435',
            'client_secret' => '4581ddbda8850e5ef13575ee433c08c8',
            'scope'         => array("email", "publish_actions"),
        ),
        'Instagram' => array(
		    'client_id'     => '5ee3f3d43b074864804eb6b9c76f56f5',
		    'client_secret' => 'b48ea821db5443798572dc36cf878497',
		    'scope'			=> array("basic"),
		),    

    )

);
