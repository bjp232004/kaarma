<?php
/**
  * Gives the page details for the services
  * 
  */

class Shortcoder_Metadata{
    
    public static function init(){
        
    }
    
    public static function metadata(){
        
        global $post;
        
        $d = array();
        $defaults = array(
            'title' => '',
            'url' => '',
            'short_url' => '',
            
            'post_id' => '',
            'post_excerpt' => '',
            'post_comments_count' => '',
            'post_image' => '',
            'post_author' => '',
            'post_date' => '',
        );
        
        if( in_the_loop()) {
            
            $d = self::meta_by_id( get_the_ID() );
            
        }else{
            
            if( is_home() && get_option( 'show_on_front' ) == 'page' ){
                
                $d = self::meta_by_id( get_option( 'page_for_posts' ) );
                
            }elseif( is_front_page() || ( is_home() && ( get_option( 'show_on_front' ) == 'posts' || !get_option( 'page_for_posts' ) ) ) ){
                
                $d = array(
                    'title' => get_bloginfo( 'name' ),
                    'url' => get_bloginfo( 'url' ),
                    'post_excerpt' => get_bloginfo( 'description' ),
                    'short_url' => get_bloginfo( 'url' ),
                );
                
            }elseif( is_singular() ){
                
                $d = self::meta_by_id( $post->ID );
            
            }elseif( is_tax() || is_tag() || is_category() ){
                
                $term = get_queried_object();
                $d = array(
                    'title' => wp_title( '', false ),
                    'url' => get_term_link( $term, $term->taxonomy ),
                    'post_excerpt' => $term->description
                );
                
            }elseif( function_exists( 'get_post_type_archive_link' ) && is_post_type_archive() ){
                
                $post_type = get_query_var( 'post_type' );
                $post_type_obj = get_post_type_object( $post_type );
                
                $d = array(
                    'title' => wp_title( '', false ),
                    'url' => get_post_type_archive_link( $post_type ),
                    'post_excerpt' => $post_type_obj->description
                );
                
            }elseif( is_date() ){
                
                if( is_day() ){
                    
                    $d = array(
                        'title' => wp_title( '', false ),
                        'url' => get_day_link( get_query_var( 'year' ), get_query_var( 'monthnum' ), get_query_var( 'day' ) )
                    );
                    
                }elseif( is_month() ){
                    
                    $d = array(
                        'title' => wp_title( '', false ),
                        'url' => get_month_link( get_query_var( 'year' ), get_query_var( 'monthnum' ) )
                    );
                    
                }elseif( is_year ){
                    
                    $d = array(
                        'title' => wp_title( '', false ),
                        'url' => get_year_link( get_query_var( 'year' ) )
                    );
                    
                }
                
            }elseif( is_author() ){
                
                $d = array(
                    'title' => wp_title( '', false ),
                    'url' => get_author_posts_url( get_query_var( 'author' ), get_query_var( 'author_name' ) )
                );
                
            }elseif( is_search() ){
                
                $d = array(
                    'title' => wp_title( '', false ),
                    'url' => get_search_link()
                );
                
            }elseif( is_404() ){
                
                $d = array(
                    'title' => wp_title( '', false ),
                    'url' => home_url( esc_url( $_SERVER['REQUEST_URI'] ) )
                );
                
            }
        }
        
        $meta = wp_parse_args( $d, $defaults );
        $meta = array_map( 'trim', $meta );
        $meta = apply_filters( 'sc_mod_metadata', $meta );
        
        return $meta;
        
    }
    
    public static function meta_by_id( $id ){
        
        global $post;
        
        $d = array();
        
        if( $id ){
            $d = array(
                'title' => get_the_title( $id ),
                'url' => get_permalink( $id ),
                'short_url' => wp_get_shortlink( $id ),
                
                'post_id' => $id,
                'post_excerpt' => self::excerpt( $post->post_excerpt, 100 ), // using $post->post_excerpt instead of get_the_excerpt as the_content filter loses shortcode formatting
                'post_comments_count' => get_comments_number( $id ),
                'post_image' => self::post_image( $id ),
                'post_author' => get_the_author(),
                'post_date' => get_the_date()
            );
        }
        
        if( $d[ 'short_url' ] == '' ){
            $d[ 'short_url' ] = $d[ 'url' ];
        }
        
        return $d;
        
    }
    
    public static function excerpt( $excerpt, $length = 250 ){
        
        global $post;
        
        $excerpt = ( empty( $excerpt ) ) ? strip_tags( strip_shortcodes( $post->post_content ) ) : $excerpt;
        return substr( $excerpt, 0, $length );
        
    }
    
    public static function post_image( $post_id ){
        
        $thumbnail = get_the_post_thumbnail_url( $post_id );
        
        if( $thumbnail === false ){
            return '';
        }else{
            return $thumbnail;
        }
        
    }
    
}

Shortcoder_Metadata::init();

?>