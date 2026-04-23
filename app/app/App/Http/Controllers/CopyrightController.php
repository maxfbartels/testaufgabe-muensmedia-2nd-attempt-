<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    public const HEADER = "
.-----. _            .-----.                .-----.
`-. .-':_;           `-. .-'                `-. .-'
  : :  .-. .--.  _____ : : .--.   .--.  _____ : : .--.  .--.
  : :  : :'  ..':_____:: :' .; ; '  ..':_____:: :' .; :' '_.'
  :_;  :_;`.__.'       :_;`.__,_;`.__.'       :_;`.__.'`.__.'
        ";

    // Generated with  https://patorjk.com/software/taag/
    public const COPYRIGHT = "
   _____                  __________                __         .__          
  /     \ _____  ___  ___ \______   \_____ ________/  |_  ____ |  |   ______
 /  \ /  \\__  \ \  \/  /  |    |  _/\__  \\_  __ \   __\/ __ \|  |  /  ___/
/    Y    \/ __ \_>    <   |    |   \ / __ \|  | \/|  | \  ___/|  |__\___ \ 
\____|__  (____  /__/\_ \  |______  /(____  /__|   |__|  \___  >____/____  >
        \/     \/      \/         \/      \/                 \/          \/ 
        ";

    static public function getCopyright(): string
    {
        return self::HEADER . self::COPYRIGHT;
    }

    static public function showCopyright(): Response
    {
        return response( self::getCopyright() )->header('Content-Type', 'text/plain');
    }
}
