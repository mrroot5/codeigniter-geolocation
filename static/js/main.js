var Utils = {
    is_empty: function(data) {
        var count = 0, i;

        if (typeof data === 'number') {
            return false;
        }

        if (typeof data === 'boolean') {
            return !data;
        }

        if (data === undefined || data === null) {
            return true;
        }

        if (data.length !== undefined) {
            return data.length === 0;
        }

        if (data === '') {
            return true;
        }

        for (i in data) {
            if (data.hasOwnProperty(i)) {
                count += 1;
            }
        }

        return count === 0;
    },
    bs4Env: function() {
        var envs = ['xs', 'sm', 'md', 'lg', 'xl'],
            classToAdd = '',
            $el = $('<div>'),
            i = 0,
            env;

        $el.appendTo($('body'));

        for (i = envs.length - 1; i >= 0; i--) {
            env = envs[i];

            switch (env) {
                case 'xs':
                    classToAdd = 'd-none .d-sm-block';
                    break;
                case 'sm':
                    classToAdd = 'd-sm-none .d-md-block';
                    break;
                case 'md':
                    classToAdd = 'd-md-none .d-lg-block';
                    break;
                case 'lg':
                    classToAdd = 'd-lg-none .d-xl-block';
                    break;
                case 'xl':
                    classToAdd = 'd-xl-none';
                    break;
            }

            $el.addClass(classToAdd);

            if ($el.is(':hidden')) {
                $el.remove();
                return env;
            } else {
                $el.removeClass(classToAdd)
            }
        }
    }
}
