<?php

namespace App\Entity\PieceType;

use App\Entity\Piece;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class ContemporaryArt extends Piece
{
    public function getstyle() {
        return parent::ContemporaryArt;
    }
}