<?php
/****************************** heading ******************************/

// heading - 4 positions
if(  $this->countModules('heading-a') and $this->countModules('heading-b') and $this->countModules('heading-c') and $this->countModules('heading-d') ){
    $contentheading = 'col-sm-3 col-md-3';
}

// heading - 3 positions
if(  $this->countModules('heading-a') and $this->countModules('heading-b') and $this->countModules('heading-c') and !$this->countModules('heading-d') ){
    $contentheading = 'col-sm-4 col-md-4';
}
if(  $this->countModules('heading-a') and $this->countModules('heading-b') and !$this->countModules('heading-c') and $this->countModules('heading-d') ){
    $contentheading = 'col-sm-4 col-md-4';
}
if(  $this->countModules('heading-a') and !$this->countModules('heading-b') and $this->countModules('heading-c') and $this->countModules('heading-d') ){
    $contentheading = 'col-sm-4 col-md-4';
}
if(  !$this->countModules('heading-a') and $this->countModules('heading-b') and $this->countModules('heading-c') and $this->countModules('heading-d') ){
    $contentheading = 'col-sm-4 col-md-4';
}

// heading - 2 positions
if(  $this->countModules('heading-a') and $this->countModules('heading-b') and !$this->countModules('heading-c') and !$this->countModules('heading-d') ){
    $contentheading = 'col-sm-6 col-md-6';
}
if(  $this->countModules('heading-a') and !$this->countModules('heading-b') and $this->countModules('heading-c') and !$this->countModules('heading-d') ){
    $contentheading = 'col-sm-6 col-md-6';
}
if(  $this->countModules('heading-a') and !$this->countModules('heading-b') and !$this->countModules('heading-c') and $this->countModules('heading-d') ){
    $contentheading = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('heading-a') and $this->countModules('heading-b') and $this->countModules('heading-c') and !$this->countModules('heading-d') ){
    $contentheading = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('heading-a') and $this->countModules('heading-b') and !$this->countModules('heading-c') and $this->countModules('heading-d') ){
    $contentheading = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('heading-a') and !$this->countModules('heading-b') and $this->countModules('heading-c') and $this->countModules('heading-d') ){
    $contentheading = 'col-sm-6 col-md-6';
}

// heading - 1 position
if(  $this->countModules('heading-a') and !$this->countModules('heading-b') and !$this->countModules('heading-c') and !$this->countModules('heading-d') ){
    $contentheading = 'col-sm-12 col-md-12';
}
if(  !$this->countModules('heading-a') and $this->countModules('heading-b') and !$this->countModules('heading-c') and !$this->countModules('heading-d') ){
    $contentheading = 'col-sm-12 col-md-12';
}
if(  !$this->countModules('heading-a') and !$this->countModules('heading-b') and $this->countModules('heading-c') and !$this->countModules('heading-d') ){
    $contentheading = 'col-sm-12 col-md-12';
}
if(  !$this->countModules('heading-a') and !$this->countModules('heading-b') and !$this->countModules('heading-c') and $this->countModules('heading-d') ){
    $contentheading = 'col-sm-12 col-md-12';
}

//nothing - default
if( empty($contentheading) ){
    $contentheading = 'col-sm-12 col-md-12';
}

/****************************** bodytop ******************************/

// bodytop - 4 positions
if(  $this->countModules('bodytop-a') and $this->countModules('bodytop-b') and $this->countModules('bodytop-c') and $this->countModules('bodytop-d') ){
    $contentbodytop = 'col-sm-3 col-md-3';
}

// bodytop - 3 positions
if(  $this->countModules('bodytop-a') and $this->countModules('bodytop-b') and $this->countModules('bodytop-c') and !$this->countModules('bodytop-d') ){
    $contentbodytop = 'col-sm-4 col-md-4';
}
if(  $this->countModules('bodytop-a') and $this->countModules('bodytop-b') and !$this->countModules('bodytop-c') and $this->countModules('bodytop-d') ){
    $contentbodytop = 'col-sm-4 col-md-4';
}
if(  $this->countModules('bodytop-a') and !$this->countModules('bodytop-b') and $this->countModules('bodytop-c') and $this->countModules('bodytop-d') ){
    $contentbodytop = 'col-sm-4 col-md-4';
}
if(  !$this->countModules('bodytop-a') and $this->countModules('bodytop-b') and $this->countModules('bodytop-c') and $this->countModules('bodytop-d') ){
    $contentbodytop = 'col-sm-4 col-md-4';
}

// bodytop - 2 positions
if(  $this->countModules('bodytop-a') and $this->countModules('bodytop-b') and !$this->countModules('bodytop-c') and !$this->countModules('bodytop-d') ){
    $contentbodytop = 'col-sm-6 col-md-6';
}
if(  $this->countModules('bodytop-a') and !$this->countModules('bodytop-b') and $this->countModules('bodytop-c') and !$this->countModules('bodytop-d') ){
    $contentbodytop = 'col-sm-6 col-md-6';
}
if(  $this->countModules('bodytop-a') and !$this->countModules('bodytop-b') and !$this->countModules('bodytop-c') and $this->countModules('bodytop-d') ){
    $contentbodytop = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('bodytop-a') and $this->countModules('bodytop-b') and $this->countModules('bodytop-c') and !$this->countModules('bodytop-d') ){
    $contentbodytop = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('bodytop-a') and $this->countModules('bodytop-b') and !$this->countModules('bodytop-c') and $this->countModules('bodytop-d') ){
    $contentbodytop = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('bodytop-a') and !$this->countModules('bodytop-b') and $this->countModules('bodytop-c') and $this->countModules('bodytop-d') ){
    $contentbodytop = 'col-sm-6 col-md-6';
}

// bodytop - 1 position
if(  $this->countModules('bodytop-a') and !$this->countModules('bodytop-b') and !$this->countModules('bodytop-c') and !$this->countModules('bodytop-d') ){
    $contentbodytop = 'col-sm-12 col-md-12';
}
if(  !$this->countModules('bodytop-a') and $this->countModules('bodytop-b') and !$this->countModules('bodytop-c') and !$this->countModules('bodytop-d') ){
    $contentbodytop = 'col-sm-12 col-md-12';
}
if(  !$this->countModules('bodytop-a') and !$this->countModules('bodytop-b') and $this->countModules('bodytop-c') and !$this->countModules('bodytop-d') ){
    $contentbodytop = 'col-sm-12 col-md-12';
}
if(  !$this->countModules('bodytop-a') and !$this->countModules('bodytop-b') and !$this->countModules('bodytop-c') and $this->countModules('bodytop-d') ){
    $contentbodytop = 'col-sm-12 col-md-12';
}

//nothing - default
if( empty($contentbodytop) ){
    $contentbodytop = 'col-sm-12 col-md-12';
}

/****************************** bodybottom ******************************/

// bodybottom - 4 positions
if(  $this->countModules('bodybottom-a') and $this->countModules('bodybottom-b') and $this->countModules('bodybottom-c') and $this->countModules('bodybottom-d') ){
    $contentbodybottom = 'col-sm-3 col-md-3';
}

// bodybottom - 3 positions
if(  $this->countModules('bodybottom-a') and $this->countModules('bodybottom-b') and $this->countModules('bodybottom-c') and !$this->countModules('bodybottom-d') ){
    $contentbodybottom = 'col-sm-4 col-md-4';
}
if(  $this->countModules('bodybottom-a') and $this->countModules('bodybottom-b') and !$this->countModules('bodybottom-c') and $this->countModules('bodybottom-d') ){
    $contentbodybottom = 'col-sm-4 col-md-4';
}
if(  $this->countModules('bodybottom-a') and !$this->countModules('bodybottom-b') and $this->countModules('bodybottom-c') and $this->countModules('bodybottom-d') ){
    $contentbodybottom = 'col-sm-4 col-md-4';
}
if(  !$this->countModules('bodybottom-a') and $this->countModules('bodybottom-b') and $this->countModules('bodybottom-c') and $this->countModules('bodybottom-d') ){
    $contentbodybottom = 'col-sm-4 col-md-4';
}

// bodybottom - 2 positions
if(  $this->countModules('bodybottom-a') and $this->countModules('bodybottom-b') and !$this->countModules('bodybottom-c') and !$this->countModules('bodybottom-d') ){
    $contentbodybottom = 'col-sm-6 col-md-6';
}
if(  $this->countModules('bodybottom-a') and !$this->countModules('bodybottom-b') and $this->countModules('bodybottom-c') and !$this->countModules('bodybottom-d') ){
    $contentbodybottom = 'col-sm-6 col-md-6';
}
if(  $this->countModules('bodybottom-a') and !$this->countModules('bodybottom-b') and !$this->countModules('bodybottom-c') and $this->countModules('bodybottom-d') ){
    $contentbodybottom = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('bodybottom-a') and $this->countModules('bodybottom-b') and $this->countModules('bodybottom-c') and !$this->countModules('bodybottom-d') ){
    $contentbodybottom = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('bodybottom-a') and $this->countModules('bodybottom-b') and !$this->countModules('bodybottom-c') and $this->countModules('bodybottom-d') ){
    $contentbodybottom = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('bodybottom-a') and !$this->countModules('bodybottom-b') and $this->countModules('bodybottom-c') and $this->countModules('bodybottom-d') ){
    $contentbodybottom = 'col-sm-6 col-md-6';
}

// bodybottom - 1 position
if(  $this->countModules('bodybottom-a') and !$this->countModules('bodybottom-b') and !$this->countModules('bodybottom-c') and !$this->countModules('bodybottom-d') ){
    $contentbodybottom = 'col-sm-12 col-md-12';
}
if(  !$this->countModules('bodybottom-a') and $this->countModules('bodybottom-b') and !$this->countModules('bodybottom-c') and !$this->countModules('bodybottom-d') ){
    $contentbodybottom = 'col-sm-12 col-md-12';
}
if(  !$this->countModules('bodybottom-a') and !$this->countModules('bodybottom-b') and $this->countModules('bodybottom-c') and !$this->countModules('bodybottom-d') ){
    $contentbodybottom = 'col-sm-12 col-md-12';
}
if(  !$this->countModules('bodybottom-a') and !$this->countModules('bodybottom-b') and !$this->countModules('bodybottom-c') and $this->countModules('bodybottom-d') ){
    $contentbodybottom = 'col-sm-12 col-md-12';
}

//nothing - default
if( empty($contentbodybottom) ){
    $contentbodybottom = 'col-sm-12 col-md-12';
}

/****************************** inner ******************************/

// inner - 4 positions
if(  $this->countModules('inner-a') and $this->countModules('inner-b') and $this->countModules('inner-c') and $this->countModules('inner-d') ){
    $contentinner = 'col-sm-3 col-md-3';
}

// inner - 3 positions
if(  $this->countModules('inner-a') and $this->countModules('inner-b') and $this->countModules('inner-c') and !$this->countModules('inner-d') ){
    $contentinner = 'col-sm-4 col-md-4';
}
if(  $this->countModules('inner-a') and $this->countModules('inner-b') and !$this->countModules('inner-c') and $this->countModules('inner-d') ){
    $contentinner = 'col-sm-4 col-md-4';
}
if(  $this->countModules('inner-a') and !$this->countModules('inner-b') and $this->countModules('inner-c') and $this->countModules('inner-d') ){
    $contentinner = 'col-sm-4 col-md-4';
}
if(  !$this->countModules('inner-a') and $this->countModules('inner-b') and $this->countModules('inner-c') and $this->countModules('inner-d') ){
    $contentinner = 'col-sm-4 col-md-4';
}

// inner - 2 positions
if(  $this->countModules('inner-a') and $this->countModules('inner-b') and !$this->countModules('inner-c') and !$this->countModules('inner-d') ){
    $contentinner = 'col-sm-6 col-md-6';
}
if(  $this->countModules('inner-a') and !$this->countModules('inner-b') and $this->countModules('inner-c') and !$this->countModules('inner-d') ){
    $contentinner = 'col-sm-6 col-md-6';
}
if(  $this->countModules('inner-a') and !$this->countModules('inner-b') and !$this->countModules('inner-c') and $this->countModules('inner-d') ){
    $contentinner = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('inner-a') and $this->countModules('inner-b') and $this->countModules('inner-c') and !$this->countModules('inner-d') ){
    $contentinner = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('inner-a') and $this->countModules('inner-b') and !$this->countModules('inner-c') and $this->countModules('inner-d') ){
    $contentinner = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('inner-a') and !$this->countModules('inner-b') and $this->countModules('inner-c') and $this->countModules('inner-d') ){
    $contentinner = 'col-sm-6 col-md-6';
}

// inner - 1 position
if(  $this->countModules('inner-a') and !$this->countModules('inner-b') and !$this->countModules('inner-c') and !$this->countModules('inner-d') ){
    $contentinner = 'col-sm-12 col-md-12';
}
if(  !$this->countModules('inner-a') and $this->countModules('inner-b') and !$this->countModules('inner-c') and !$this->countModules('inner-d') ){
    $contentinner = 'col-sm-12 col-md-12';
}
if(  !$this->countModules('inner-a') and !$this->countModules('inner-b') and $this->countModules('inner-c') and !$this->countModules('inner-d') ){
    $contentinner = 'col-sm-12 col-md-12';
}
if(  !$this->countModules('inner-a') and !$this->countModules('inner-b') and !$this->countModules('inner-c') and $this->countModules('inner-d') ){
    $contentinner = 'col-sm-12 col-md-12';
}

//nothing - default
if( empty($contentinner) ){
    $contentinner = 'col-sm-12 col-md-12';
}

/****************************** user ******************************/

// user - 4 positions
if(  $this->countModules('user-a') and $this->countModules('user-b') and $this->countModules('user-c') and $this->countModules('user-d') ){
    $contentuser = 'col-sm-3 col-md-3';
}

// user - 3 positions
if(  $this->countModules('user-a') and $this->countModules('user-b') and $this->countModules('user-c') and !$this->countModules('user-d') ){
    $contentuser = 'col-sm-4 col-md-4';
}
if(  $this->countModules('user-a') and $this->countModules('user-b') and !$this->countModules('user-c') and $this->countModules('user-d') ){
    $contentuser = 'col-sm-4 col-md-4';
}
if(  $this->countModules('user-a') and !$this->countModules('user-b') and $this->countModules('user-c') and $this->countModules('user-d') ){
    $contentuser = 'col-sm-4 col-md-4';
}
if(  !$this->countModules('user-a') and $this->countModules('user-b') and $this->countModules('user-c') and $this->countModules('user-d') ){
    $contentuser = 'col-sm-4 col-md-4';
}

// user - 2 positions
if(  $this->countModules('user-a') and $this->countModules('user-b') and !$this->countModules('user-c') and !$this->countModules('user-d') ){
    $contentuser = 'col-sm-6 col-md-6';
}
if(  $this->countModules('user-a') and !$this->countModules('user-b') and $this->countModules('user-c') and !$this->countModules('user-d') ){
    $contentuser = 'col-sm-6 col-md-6';
}
if(  $this->countModules('user-a') and !$this->countModules('user-b') and !$this->countModules('user-c') and $this->countModules('user-d') ){
    $contentuser = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('user-a') and $this->countModules('user-b') and $this->countModules('user-c') and !$this->countModules('user-d') ){
    $contentuser = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('user-a') and $this->countModules('user-b') and !$this->countModules('user-c') and $this->countModules('user-d') ){
    $contentuser = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('user-a') and !$this->countModules('user-b') and $this->countModules('user-c') and $this->countModules('user-d') ){
    $contentuser = 'col-sm-6 col-md-6';
}

// user - 1 position
if(  $this->countModules('user-a') and !$this->countModules('user-b') and !$this->countModules('user-c') and !$this->countModules('user-d') ){
    $contentuser = 'col-sm-12 col-md-12';
}
if(  !$this->countModules('user-a') and $this->countModules('user-b') and !$this->countModules('user-c') and !$this->countModules('user-d') ){
    $contentuser = 'col-sm-12 col-md-12';
}
if(  !$this->countModules('user-a') and !$this->countModules('user-b') and $this->countModules('user-c') and !$this->countModules('user-d') ){
    $contentuser = 'col-sm-12 col-md-12';
}
if(  !$this->countModules('user-a') and !$this->countModules('user-b') and !$this->countModules('user-c') and $this->countModules('user-d') ){
    $contentuser = 'col-sm-12 col-md-12';
}

//nothing - default
if( empty($contentuser) ){
    $contentuser = 'col-sm-12 col-md-12';
}

/****************************** bodyright ******************************/

// bodyright - 2 positions
if( $this->countModules('bodyleft') and $this->countModules('bodyright') ){
    $bodyright = array(
        'col-sm-6 col-md-3',
        'col-sm-3 col-md-6',
        'col-sm-3 col-md-3'
    );
}

// bodyright - 1 position
if( !$this->countModules('bodyleft') and $this->countModules('bodyright') ){
    $bodyright = array(
        '',
        'col-sm-9 col-md-9',
        'col-sm-3 col-md-3',
    );
}
if( $this->countModules('bodyleft') and !$this->countModules('bodyright') ){
    $bodyright = array(
        'col-sm-3 col-md-3',
        'col-sm-9 col-md-9',
        ''
    );
}

//bodyright - 0 position
if( !$this->countModules('bodyleft') and !$this->countModules('bodyright') ){
    $bodyright = array(
        '',
        'col-sm-12 col-md-12',
        ''
    );
}

/****************************** bottom ******************************/

// bottom - 4 positions
if(  $this->countModules('bottom-a') and $this->countModules('bottom-b') and $this->countModules('bottom-c') and $this->countModules('bottom-d') ){
    $contentbottom = 'col-sm-3 col-md-3';
}

// bottom - 3 positions
if(  $this->countModules('bottom-a') and $this->countModules('bottom-b') and $this->countModules('bottom-c') and !$this->countModules('bottom-d') ){
    $contentbottom = 'col-sm-4 col-md-4';
}
if(  $this->countModules('bottom-a') and $this->countModules('bottom-b') and !$this->countModules('bottom-c') and $this->countModules('bottom-d') ){
    $contentbottom = 'col-sm-4 col-md-4';
}
if(  $this->countModules('bottom-a') and !$this->countModules('bottom-b') and $this->countModules('bottom-c') and $this->countModules('bottom-d') ){
    $contentbottom = 'col-sm-4 col-md-4';
}
if(  !$this->countModules('bottom-a') and $this->countModules('bottom-b') and $this->countModules('bottom-c') and $this->countModules('bottom-d') ){
    $contentbottom = 'col-sm-4 col-md-4';
}

// bottom - 2 positions
if(  $this->countModules('bottom-a') and $this->countModules('bottom-b') and !$this->countModules('bottom-c') and !$this->countModules('bottom-d') ){
    $contentbottom = 'col-sm-6 col-md-6';
}
if(  $this->countModules('bottom-a') and !$this->countModules('bottom-b') and $this->countModules('bottom-c') and !$this->countModules('bottom-d') ){
    $contentbottom = 'col-sm-6 col-md-6';
}
if(  $this->countModules('bottom-a') and !$this->countModules('bottom-b') and !$this->countModules('bottom-c') and $this->countModules('bottom-d') ){
    $contentbottom = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('bottom-a') and $this->countModules('bottom-b') and $this->countModules('bottom-c') and !$this->countModules('bottom-d') ){
    $contentbottom = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('bottom-a') and $this->countModules('bottom-b') and !$this->countModules('bottom-c') and $this->countModules('bottom-d') ){
    $contentbottom = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('bottom-a') and !$this->countModules('bottom-b') and $this->countModules('bottom-c') and $this->countModules('bottom-d') ){
    $contentbottom = 'col-sm-6 col-md-6';
}

// bottom - 1 position
if(  $this->countModules('bottom-a') and !$this->countModules('bottom-b') and !$this->countModules('bottom-c') and !$this->countModules('bottom-d') ){
    $contentbottom = 'col-sm-12 col-md-12';
}
if(  !$this->countModules('bottom-a') and $this->countModules('bottom-b') and !$this->countModules('bottom-c') and !$this->countModules('bottom-d') ){
    $contentbottom = 'col-sm-12 col-md-12';
}
if(  !$this->countModules('bottom-a') and !$this->countModules('bottom-b') and $this->countModules('bottom-c') and !$this->countModules('bottom-d') ){
    $contentbottom = 'col-sm-12 col-md-12';
}
if(  !$this->countModules('bottom-a') and !$this->countModules('bottom-b') and !$this->countModules('bottom-c') and $this->countModules('bottom-d') ){
    $contentbottom = 'col-sm-12 col-md-12';
}

//nothing - default
if( empty($contentbottom) ){
    $contentbottom = 'col-sm-12 col-md-12';
}

/****************************** footer ******************************/

// footer - 4 positions
if(  $this->countModules('footer-a') and $this->countModules('footer-b') and $this->countModules('footer-c') and $this->countModules('footer-d') ){
    $contentfooter = 'col-sm-3 col-md-3';
}

// footer - 3 positions
if(  $this->countModules('footer-a') and $this->countModules('footer-b') and $this->countModules('footer-c') and !$this->countModules('footer-d') ){
    $contentfooter = 'col-sm-4 col-md-4';
}
if(  $this->countModules('footer-a') and $this->countModules('footer-b') and !$this->countModules('footer-c') and $this->countModules('footer-d') ){
    $contentfooter = 'col-sm-4 col-md-4';
}
if(  $this->countModules('footer-a') and !$this->countModules('footer-b') and $this->countModules('footer-c') and $this->countModules('footer-d') ){
    $contentfooter = 'col-sm-4 col-md-4';
}
if(  !$this->countModules('footer-a') and $this->countModules('footer-b') and $this->countModules('footer-c') and $this->countModules('footer-d') ){
    $contentfooter = 'col-sm-4 col-md-4';
}

// footer - 2 positions
if(  $this->countModules('footer-a') and $this->countModules('footer-b') and !$this->countModules('footer-c') and !$this->countModules('footer-d') ){
    $contentfooter = 'col-sm-6 col-md-6';
}
if(  $this->countModules('footer-a') and !$this->countModules('footer-b') and $this->countModules('footer-c') and !$this->countModules('footer-d') ){
    $contentfooter = 'col-sm-6 col-md-6';
}
if(  $this->countModules('footer-a') and !$this->countModules('footer-b') and !$this->countModules('footer-c') and $this->countModules('footer-d') ){
    $contentfooter = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('footer-a') and $this->countModules('footer-b') and $this->countModules('footer-c') and !$this->countModules('footer-d') ){
    $contentfooter = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('footer-a') and $this->countModules('footer-b') and !$this->countModules('footer-c') and $this->countModules('footer-d') ){
    $contentfooter = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('footer-a') and !$this->countModules('footer-b') and $this->countModules('footer-c') and $this->countModules('footer-d') ){
    $contentfooter = 'col-sm-6 col-md-6';
}

// footer - 1 position
if(  $this->countModules('footer-a') and !$this->countModules('footer-b') and !$this->countModules('footer-c') and !$this->countModules('footer-d') ){
    $contentfooter = 'col-sm-12 col-md-12';
}
if(  !$this->countModules('footer-a') and $this->countModules('footer-b') and !$this->countModules('footer-c') and !$this->countModules('footer-d') ){
    $contentfooter = 'col-sm-12 col-md-12';
}
if(  !$this->countModules('footer-a') and !$this->countModules('footer-b') and $this->countModules('footer-c') and !$this->countModules('footer-d') ){
    $contentfooter = 'col-sm-12 col-md-12';
}
if(  !$this->countModules('footer-a') and !$this->countModules('footer-b') and !$this->countModules('footer-c') and $this->countModules('footer-d') ){
    $contentfooter = 'col-sm-12 col-md-12';
}

//nothing - default
if( empty($contentfooter) ){
    $contentfooter = 'col-sm-12 col-md-12';
}

/****************************** footer2 ******************************/

// footer2 - 2 positions
if(  $this->countModules('footer-e') and $this->countModules('footer-f') ){
    $contentfooter2 = 'col-sm-3 col-md-3';
}

// footer2 - 1 position
if(  $this->countModules('footer-e') and !$this->countModules('footer-f') ){
    $contentfooter2 = 'col-sm-6 col-md-6';
}
if(  !$this->countModules('footer-e') and $this->countModules('footer-f') ){
    $contentfooter2 = 'col-sm-6 col-md-6';
}

//nothing - default
if( empty($contentfooter2) ){
    $contentfooter2 = 'col-sm-6 col-md-6';
}