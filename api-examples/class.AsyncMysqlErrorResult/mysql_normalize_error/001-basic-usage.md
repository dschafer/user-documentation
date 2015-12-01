When an error occurs when establishing a connection or on a query, and you catch the exception that is thrown, you will get an `AsyncMysqlErrorResult`. And one of the methods on an `AsyncMysqlErrorResult` is `mysql_normalize_error()`, which gives you possibly alternative, normalized version of the error provided by `mysql_error()`. Many times they are the same; it depends on how the client provides the error messages. In this case, the two errors are the same; the error string is letting us know that the `bogus` table does not exist.