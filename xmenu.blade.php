@php
function xmenu($X,$X_table,$X_cloumn,$X_id)
    {
        //GET All Category From Your Database
        $items = DB::table($X_table)->where($X_id,"=",$X)->get();
            //Check for empty STACK
            if (count($items) > 0)
                {
                    //if you have class for Child ul add here
                    $class="header__menu__dropdown";
                    if ($X==0){$class="";}
                    echo('<ul class="'.$class.'">');
                    foreach ($items as $item) 
                        {
                        echo('<li><a href="$">');
                        echo( $item->$X_cloumn );
                        echo('</a>');
                        xmenu($item->id,$X_table,$X_cloumn,$X_id);
                        echo('</li>');
                        }
                    echo('</ul>');
                }
    }
@endphp
