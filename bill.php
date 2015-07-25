<?php

/**
 * Bill will look at any data processing and make the data available for our
 * other classes. Could be seen as the control.
 */
class bills {
    
    protected $customerbill = array(), $subtotal, $discounts, $total;


    # Working on the asumption that we're calling this each time an item is 
    # scanned.
    function product ( $name, $currency, $price, $discounts ) {
        $this->customerbill [] = array ( n => $name, c => $currency, p => $price, d => $discounts );
    }
    
    /**
     * I'd like to keep the following seperate as it gives me more control over
     * what to display and how. It's also easier for me to add a vat function 
     * if needed.
     */
    
    function subtotal( ) {
        $this->subtotal = 0;
        foreach( $this->customerbill as $item ) {
            $this->subtotal += $item[p]; 
        }
    }
    
    function discounts( ) {
        $this->discounts = 0;
        foreach ( $this->customerbill as $item ) {
            $this->discounts += $item[d];
        } 
    }

    function total( ) {
        $this->total = $this->subtotal - $this->discounts;
    }

    function vat( ) {
        return vat;
    }
    
    function getCurrency( $currency ) {
        # Give more time i'd process all my figures through the proper currency
        # channels
        return $currency;
    }
    
}

/**
 * Class seperated out purely to demonstrate how the 'view' can be separated 
 * out. Below could be in a template html depending on framework used or any
 * other setup.
 */
class billdisplay extends bills {
    
    function display() {
        echo '<!DOCTYPE html>';
        echo "<META http-equiv='Content-Type' content='text/html; charset=UTF-8'>";
        echo '<pre>';
        echo "<table><th>Item</th><th>Price</th>";
        foreach ($this->customerbill as $item => $desc) {
            echo '<tr>' ;
            echo "<td>$desc[n]</td> 
                  <td>$desc[c] $desc[p]</td>" ;
            echo '</tr>';
        } echo "<br />";

        echo "<tr><td>Subtotal</td><td>&pound $this->subtotal</td></tr>"; 
        echo "<tr><td>Discounts</td><td>&pound $this->discounts</td></tr>"; 
        echo "<tr><td>Total</td><td>&pound $this->total</td></tr>"; 
      
        echo '</table>';
        echo '</pre>';
        echo '</html>';
    }
    
}


/**
 * Test Data
 */

/**
 * Used billdisplay puely to demonstrate inheritance and also the fact that
 * multiple classes could be used to seperate out mvc.
 */
$myBill = new billdisplay();

$billitems = array (
    array ( n=>'Baked Beans',      c=>'£', p=>'0.50', d=>'0.10' ),
    array ( n=>'Wasing Up Liquid', c=>'£', p=>'0.72', d=>'0.10' ),
    array ( n=>'Rubber Gloves',    c=>'£', p=>'1.50', d=>'0.10' ),
    array ( n=>'Bread',            c=>'£', p=>'0.72', d=>'0.10' ),
    array ( n=>'Butter',           c=>'£', p=>'0.83', d=>'0.10' ) 
);

/**
 * Could also just send the whole array to be processed but working on the
 * assumption that items are sent to the till printer one by one as items
 * are scanned and printed on the receipt so 'product would be called each time.
 */
foreach ( $billitems as $item ) {
    $myBill->product($item[n], $item[c], $item[p], $item[d] );
}

/**
 * Called these functions individually to give me more control over what is
 * executed and when i.e. work out discounts separately, vat receipt may be 
 * requested so function can be added by anyone easily and executed below...
 */
$myBill->subtotal();
$myBill->discounts();
$myBill->total();

$myBill->display();

?>

