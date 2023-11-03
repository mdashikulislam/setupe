var config = {
	debug: false,
	prefix: 'waziper',
	frontend: '',
	redis: 'redis://127.0.0.1:6379', // redis://:123456@127.0.0.1:6379
	port: 8000,
	database: {
		connectionLimit: 500,
		host: "localhost",
		user: "",
		password: "",
		database: "",
		charset: "utf8mb4",
		debug: false,
		waitForConnections: true,
		multipleStatements: true
	},
	cors: {
		origin: '*',
		optionsSuccessStatus: 200
	}
}

module.exports = config; 