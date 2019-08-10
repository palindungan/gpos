<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head -->
    <?php $this->load->view("_partials_frontend_wizard/head.php") ?>
    <!-- End of Head -->
</head>

<body>
    <!-- partial:index.partial.html -->
    <form method="POST" action="">
        <div class="container">
            <div id="app">
                <step-navigation :steps="steps" :currentstep="currentstep">
                </step-navigation>

                <div v-show="currentstep == 1">
                    <h3>Step 1</h3>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                </div>

                <div v-show="currentstep == 2">
                    <h3>Step 2</h3>
                    <div class="form-group">
                        <label for="select">Example select</label>
                        <select class="form-control" name="select">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>

                <div v-show="currentstep == 3">
                    <h3>Step 3</h3>
                    <div class="form-group">
                        <label for="textarea">Example textarea</label>
                        <textarea class="form-control" name="textarea" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="file">File input</label>
                        <input type="file" class="form-control-file" name="file" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                    </div>
                </div>

                <step v-for="step in steps" :currentstep="currentstep" :key="step.id" :step="step" :stepcount="steps.length" @step-change="stepChanged">
                </step>

                <script type="x-template" id="step-navigation-template">
                    <ol class="step-indicator">
                <li v-for="step in steps" is="step-navigation-step" :key="step.id" :step="step" :currentstep="currentstep">
                </li>
            </ol>
        </script>

                <script type="x-template" id="step-navigation-step-template">
                    <li :class="indicatorclass">
                <div class="step"><i :class="step.icon_class"></i></div>
                <div class="caption hidden-xs hidden-sm">Step <span v-text="step.id"></span>: <span v-text="step.title"></span></div>
            </li>
        </script>

                <script type="x-template" id="step-template">
                    <div class="step-wrapper" :class="stepWrapperClass">
                <button type="button" class="btn btn-primary" @click="lastStep" :disabled="firststep">
                    Back
                </button>
                <button type="button" class="btn btn-primary" @click="nextStep" :disabled="laststep">
                    Next
                </button>
                <button type="submit" class="btn btn-primary" v-if="laststep">
                    Submit
                </button>
            </div>
        </script>
            </div>
        </div>
    </form>

    <!-- JavaScript Libraries -->
    <?php $this->load->view("_partials_frontend_wizard/javascript.php") ?>
    <!-- End of JavaScript Libraries -->

</body>

</html>