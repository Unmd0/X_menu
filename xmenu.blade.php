@php




function xmenu($X,$X_table,$X_cloumn,$X_id)
    {
        $items = DB::table($X_table)->get()->toArray();
        X_menu_stack($X,$X_cloumn,$X_id,$items);
    }





function X_menu_stack($X,$X_cloumn,$X_id,$items)
    {
        $menu = array_filter($items, function($val) use($X,$X_id){
            return $val->$X_id == $X;
        });
            //Check for empty STACK
            if (count($menu) > 0)
                {
                    //if you have class for Parent ul add here
                    $class="header__menu__dropdown";
                    if ($X==0){$class="";}
                    echo('<ul class="'.$class.'">');
                    foreach ($menu as $item) 
                        {
                        echo('<li><a href="$">');
                        echo( $item->$X_cloumn );
                        echo('</a>');
                        X_menu_stack($item->id,$X_cloumn,$X_id,$items);
                        echo('</li>');
                        }
                    echo('</ul>');
                }        
    }


@endphp
