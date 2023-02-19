install: configure

configure:

	@echo "⚙️ Configuring Wordpress parameters..."
	wp core install \
		--url="${WORDPRESS_WEBSITE_URL}" \
		--title="$(WORDPRESS_WEBSITE_TITLE)" \
		--admin_user="${WORDPRESS_ADMIN_USER}" \
		--admin_password="${WORDPRESS_ADMIN_PASSWORD}" \
		--admin_email="${WORDPRESS_ADMIN_EMAIL}"
	mysql --user=${WORDPRESS_DB_USER} --password=${WORDPRESS_DB_PASSWORD} --host=mysql ${WORDPRESS_DB_NAME} < /scripts/script.sql