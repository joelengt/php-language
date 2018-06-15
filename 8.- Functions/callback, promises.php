<?php 

function userBuild($number, $cb) {
    $err = '';
    $result = $number * 10;
    if($result !== null) {
        return $cb($err, $result);

    } else {
        $err = 'Error, the result is null';
        return $cb($err);
    }

}


// Type 1: Simple callback hell
userBuild(10, function ($err, $result) {
    if($err) {
        return $err;
    }
    echo $result;
});

book->userBuild(10, function ($err, $result) {
    if($err) {
        return $err;
    }
    book->userBuild(result, function ($err, $result) {
        if($err) {
            return $err;
        }
        book->userBuild(result, function ($err, $result) {
            if($err) {
                return $err;
            }
            echo $result;
        });
    });
});

// Sample Callback
$asyncFS = new CoolAsyncFileSystemImpl();

$asyncFS->fileGetContents('query.sql', function($contents) {
    AsyncDB::query($contents, function($result) {
        $asyncFS->fileGetContents('http://example.com?x='.$result['x'], function($response) {
            echo $response;
        });
    });
});


?>


//  Promises
<?php

use GuzzleHttp\Promise\Promise;

$promise = new Promise();
$promise->then(
    // $onFulfilled
    function ($value) {
        echo 'The promise was fulfilled.';
    },
    // $onRejected
    function ($reason) {
        echo 'The promise was rejected.';
    }
);

?>


<?php 
    
    use GuzzleHttp\Promise\Promise;

    $promise = new Promise();
    $promise
        ->then(function ($value) {
            // Return a value and don't break the chain
            return "Hello, " . $value;
        })
        // This then is executed after the first then and receives the value
        // returned from the first then.
        ->then(function ($value) {
            echo $value;
        });

    // Resolving the promise triggers the $onFulfilled callbacks and outputs
    // "Hello, reader".
    $promise->resolve('reader.');

?>

<?php 

    // Sample 1 
    $promise = new Promise();

    $promise
        ->then(function ($value) {
            return "Hello, " . $value;
        })
        ->then(function ($value) {
            return "1 " . $value;
        })
        ->then(function ($result) {
            return "*2*" . $result;
        })
        ->then(function ($result) {
            return "*3*" . $result;
        })
        ->then(function ($value) {
            echo 'Message => ' . $value;
        });

    $promise->resolve('reader.');

    // Sample 2
   $promise = new Promise();
   $nextPromise = new Promise();

   $promise
       ->then(function ($value) use ($nextPromise) {
           echo $value;
           return $nextPromise;
       })
       ->then(function ($value) {
           echo $value;
       });

   $promise->resolve('A');
   $nextPromise->resolve('B');


   // Sample 3
   $promise = new Promise();
   $promise->then(null, function ($reason) {
       echo $reason;
   });

   $promise->reject('Error!');
   // Outputs "Error!"


   // All
   $promises = array(
    accessSomeRemoteResource(),
    accessSomeRemoteResource(),
    accessSomeRemoteResource()
    );

    $promise = \React\Promise\all($promises);

    Timer\timeout($promise, 10, $loop)->then(function ($values) {
        // *all* promises resolved
    });


?>