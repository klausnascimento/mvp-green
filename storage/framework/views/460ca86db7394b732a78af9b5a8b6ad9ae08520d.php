<div class="main-content">
    <?php echo $__env->make('includes.alert-result', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0"><?php echo e(__('Indicator List')); ?></h5>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#NewIndicator">
                            <?php echo e(__('New indicator')); ?>

                            </button>
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="NewIndicator" tabindex="-1" role="dialog" aria-labelledby="NewIndicator" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Create indicator monitoring')); ?></h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                <?php echo csrf_field(); ?> 
                                                
                                                <div class="form-group row<?php echo e($errors->has('indicator_type') ? ' has-error' : ''); ?>">
                                                    <label for="indicator_type" class="col-md-4 control-label"><?php echo e(__('Indicator type')); ?></label>
                            
                                                    <div class="col-md-6">
                                                        <input id="indicator_type" type="text" class="form-control" name="indicator_type" wire:model="indicator_type" required>
                                                        <?php $__errorArgs = ['indicator_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?><br/></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                            
                                                <div class="form-group row<?php echo e($errors->has('source_type') ? ' has-error' : ''); ?>">
                                                    <label for="source_type" class="col-md-4 control-label"><?php echo e(__('Source type')); ?></label>
                            
                                                    <div class="col-md-6">
                                                        <input id="source_type" type="text" class="form-control" name="source_type" wire:model="source_type" required>
                                                        <?php $__errorArgs = ['source_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?><br/></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                            
                                                <div class="form-group row<?php echo e($errors->has('source_name') ? ' has-error' : ''); ?>">
                                                    <label for="source_name"  class="col-md-4 control-label"><?php echo e(__('Source name')); ?></label>
                                                
                                                    <div class="col-md-6">
                                                        <input id="source_name" type="text" class="form-control<?php echo e($errors->has('source_name') ? ' is-invalid' : ''); ?>" name="source_name" wire:model="source_name" required autofocus>
                                                        <?php $__errorArgs = ['source_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?><br/></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row<?php echo e($errors->has('source_location') ? ' has-error' : ''); ?>">
                                                    <label for="source_location"  class="col-md-4 control-label"><?php echo e(__('Source location')); ?></label>
                                                
                                                    <div class="col-md-6">
                                                        <input id="source_location" type="text" class="form-control<?php echo e($errors->has('source_location') ? ' is-invalid' : ''); ?>" name="source_location" wire:model="source_location" required autofocus>
                                                        <?php $__errorArgs = ['source_location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?><br/></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row<?php echo e($errors->has('measurement_unit') ? ' has-error' : ''); ?>">
                                                    <label for="measurement_unit"  class="col-md-4 control-label"><?php echo e(__('Measurement unit')); ?></label>
                                                
                                                    <div class="col-md-6">
                                                        <select class="form-control <?php $__errorArgs = ['measurement_unit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  name="measurement_unit" id="measurement_unit"  wire:model="measurement_unit">
                                                            <option value="" >Select Unit</option>
                                                            <option value=""><?php echo e(__('-- Energy consumption -- ')); ?></option>
                                                            <option value="Kilowatt-hour (kWh)"><?php echo e(__('Kilowatt-hour (kWh)')); ?></option>
                                                            <option value="Megawatt-hour (MWh)"><?php echo e(__('Megawatt-hour (MWh)')); ?></option>
                                                            <option value="Joules (J)"><?php echo e(__('Joules (J)')); ?></option>
                                                            <option value="Therm (th)"><?php echo e(__('Therm (th)')); ?></option>
                                                            <option value=""><?php echo e(__('-- Greenhouse gas emissions -- ')); ?></option>
                                                            <option value="Kilogram CO2 equivalent (kgCO2e)"><?php echo e(__('Kilogram CO2 equivalent (kgCO2e)')); ?></option>
                                                            <option value="Tonne of CO2 equivalent (tCO2e)"><?php echo e(__('Tonne of CO2 equivalent (tCO2e)')); ?></option>
                                                            <option value="Tonne of methane equivalent (tCH4e)"><?php echo e(__('Tonne of methane equivalent (tCH4e)')); ?></option>
                                                            <option value=""><?php echo e(__('-- Water discharge -- ')); ?></option>
                                                            <option value="Liter (L)"><?php echo e(__('Liter (L)')); ?></option>
                                                            <option value="gallon (gal)"><?php echo e(__('gallon (gal)')); ?></option>
                                                            <option value="Barrel (bbl)"><?php echo e(__('Barrel (bbl)')); ?></option>
                                                            <option value=""><?php echo e(__('-- Waste -- ')); ?></option>
                                                            <option value="Gram (g)"><?php echo e(__('Gram (g)')); ?></option>
                                                            <option value="Kilogram (kg)"><?php echo e(__('Kilogram (kg)')); ?></option>
                                                            <option value="Metric ton (t)"><?php echo e(__('Metric ton (t)')); ?></option>
                                                            <option value="Pound (lb)"><?php echo e(__('Pound (lb)')); ?></option>
                                                            <option value="Ounce (oz)"><?php echo e(__('Ounce (oz)')); ?></option>
                                                            <option value="Short ton (st)"><?php echo e(__('Short ton (st)')); ?></option>
                                                            <option value="Long ton (lt)"><?php echo e(__('Long ton (lt)')); ?></option>
                                                            <option value=""><?php echo e(__('-- Air quality -- ')); ?></option>
                                                            <option value="ppm (parts per million)"><?php echo e(__('ppm (parts per million)')); ?></option>
                                                            <option value="µg/m3 (micrograms per cubic meter)"><?php echo e(__('µg/m3 (micrograms per cubic meter)')); ?></option>
                                                            <option value=""><?php echo e(__('-- Other -- ')); ?></option>
                                                            <option value="Acre (ac)"><?php echo e(__('Acre (ac)')); ?></option>
                                                            <option value="Cubic inch (in3)"><?php echo e(__('Cubic inch (in3)')); ?></option>
                                                            <option value="Cubic centimeter (cm3)"><?php echo e(__('Cubic centimeter (cm3)')); ?></option>
                                                            <option value="Cubic meter (m3)"><?php echo e(__('Cubic meter (m3)')); ?></option>
                                                            <option value="Cubic foot (ft3)"><?php echo e(__('Cubic foot (ft3)')); ?></option>
                                                        </select>
                                                        <?php $__errorArgs = ['measurement_unit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?><br/></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                                                <button type="button" wire:click.prevent="storeIndicator()" class="btn bg-gradient-primary"><?php echo e(__('Submit')); ?></button>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th ></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Indicator type')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Source type')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Source name')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Source location')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Measurement unit')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Creation Date')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Actions')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $indicators; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicator): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>#<?php echo e($indicator->id); ?></td>
                                        <td><?php echo e($indicator->indicator_type); ?></td>
                                        <td><?php echo e($indicator->source_type); ?></td>
                                        <td><?php echo e($indicator->source_name); ?></td>
                                        <td><?php echo e($indicator->source_location); ?></td>
                                        <td><?php echo e($indicator->measurement_unit); ?></td>
                                        <td><?php echo e($indicator->GetPrettyCreatedAttribute()); ?></td>
                                        <td>
                                            <!-- View Link -->
                                            <a href="<?php echo e(route('indicator-monitoring-show', $indicator)); ?>" class="btn bg-gradient-primary btn-block mb-3"><?php echo e(__('View')); ?></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <?php echo e($indicators->links()); ?>

                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /var/www/html/klaus/mvp-green/resources/views/livewire/indicator-monitoring.blade.php ENDPATH**/ ?>