IF NOT EXISTS(
				SELECT 1
				FROM sysobjects,syscolumns
				WHERE sysobjects.id = syscolumns.id
				AND sysobjects.name = 'category'
				AND syscolumns.name = 'sort'
			)
BEGIN
	ALTER TABLE category
	ADD sort int(3) NULL DEFAULT 0

END