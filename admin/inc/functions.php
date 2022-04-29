<?php

/**
 * Upload d'une image
 * 
 * @param array $picture Contient la superglobale $_FILES
 * @param string $path   Contient le chemin où sera téléversé le fichier
 * @param int $maxSize   Poids maximum autorisé du fichier
 * 
 * @return array
 */
function uploadPicture(array $picture, string $path, int $maxSize = 1): array {

    // Poids max.
	$maxSize *= 1048576;

	// Types MIME acceptés
	$typeMime = [
		'jpg' => 'image/jpeg',
		'jpeg' => 'image/jpeg',
		'gif' => 'image/gif',
		'png' => 'image/png'
    ];

    // Extension du fichier
    $ext = pathinfo(strtolower($picture['name']), PATHINFO_EXTENSION);

    // Vérification de l'extension du fichier
    if (array_key_exists($ext, $typeMime) && in_array($picture['type'], $typeMime)) {

        // Vérification du poids max. de l'image
        if ($picture['size'] <= $maxSize) {

            // Génère un nom unique pour l'image
            $newName = md5(time()) . ".$ext";

            // Upload de l'image
            move_uploaded_file(
                $picture['tmp_name'],
                "$path/$newName"
            );

            // Retourne le nom de l'image
            return ['filename' => $newName];
        }
        else {
            return ['error' => 'Le poids de l\'image est trop lourd'];
        }
    }
    else {
        return ['error' => 'Ce fichier n\'est pas autorisé'];
    }
}