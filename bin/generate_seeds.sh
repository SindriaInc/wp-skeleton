#!/usr/bin/env bash

CONTAINER_NAME=$1-migrations

# WP
docker exec -it $CONTAINER_NAME su sindria -c "php /var/www/app/artisan iseed wp_options,wp_commentmeta,wp_comments,wp_links,wp_postmeta,wp_posts,wp_termmeta,wp_term_relationships,wp_terms,wp_term_taxonomy,wp_usermeta,wp_users"