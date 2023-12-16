<div class="main-content">
    <?php echo $__env->make('includes.alert-result', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0"><?php echo e(__('Incidents List')); ?></h5>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#NewIncident">
                            <?php echo e(__('New Incident')); ?>

                            </button>
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="NewIncident" tabindex="-1" role="dialog" aria-labelledby="NewIncident" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Create Incident Information')); ?></h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                <?php echo csrf_field(); ?>
                            
                                                <div class="form-group row<?php echo e($errors->has('date') ? ' has-error' : ''); ?>">
                                                    <label for="date" class="col-md-4 control-label"><?php echo e(__('Date')); ?></label>
                            
                                                    <div class="col-md-6">
                                                        <input id="date" type="date" class="form-control" name="date" wire:model="date" required autofocus>
                                                        <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?><br/></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                            
                                                <div class="form-group row<?php echo e($errors->has('time') ? ' has-error' : ''); ?>">
                                                    <label for="time" class="col-md-4 control-label"><?php echo e(__('Time')); ?></label>
                            
                                                    <div class="col-md-6">
                                                        <input id="time" type="time" class="form-control" name="time" wire:model="time" required>
                                                        <?php $__errorArgs = ['time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?><br/></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                            
                                                <div class="form-group row<?php echo e($errors->has('location') ? ' has-error' : ''); ?>">
                                                    <label for="location" class="col-md-4 control-label"><?php echo e(__('Location')); ?></label>
                            
                                                    <div class="col-md-6">
                                                        <input id="location" type="text" class="form-control" name="location" wire:model="location" required>
                                                        <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?><br/></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                            
                                                <div class="form-group row<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                                                    <label for="description" class="col-md-4 control-label"><?php echo e(__('Description')); ?></label>
                            
                                                    <div class="col-md-6">
                                                        <textarea id="description" class="form-control" name="description" wire:model="description" required></textarea>
                                                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?><br/></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                            
                                                <div class="form-group row<?php echo e($errors->has('material_type') ? ' has-error' : ''); ?>">
                                                    <label for="material_type"  class="col-md-4 control-label"><?php echo e(__('Material Type')); ?></label>
                                                
                                                    <div class="col-md-6">
                                                        <input id="material_type" type="text" class="form-control<?php echo e($errors->has('material_type') ? ' is-invalid' : ''); ?>" name="material_type" wire:model="material_type" required autofocus>
                                                        <?php $__errorArgs = ['material_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?><br/></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row<?php echo e($errors->has('quantity') ? ' has-error' : ''); ?>">
                                                    <label for="quantity"  class="col-md-4 control-label"><?php echo e(__('Quantity')); ?></label>
                                                
                                                    <div class="col-md-6">
                                                        <input id="quantity" type="number" class="form-control<?php echo e($errors->has('quantity') ? ' is-invalid' : ''); ?>" name="quantity" wire:model="quantity" required>
                                                        <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?><br/></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row<?php echo e($errors->has('unit') ? ' has-error' : ''); ?>">
                                                    <label for="unit"  class="col-md-4 control-label"><?php echo e(__('Unit')); ?></label>
                                                
                                                    <div class="col-md-6">
                                                        <select class="form-control <?php $__errorArgs = ['unit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  name="unit" id="unit"  wire:model="unit">
                                                            <option value="" ><?php echo e(__('Select Unit')); ?></option>
                                                            <option value="Gram (g)"><?php echo e(__('Gram (g)')); ?></option>
                                                            <option value="Kilogram (kg)"><?php echo e(__('Kilogram (kg)')); ?></option>
                                                            <option value="Metric ton (t)"><?php echo e(__('Metric ton (t)')); ?></option>
                                                            <option value="Pound (lb)"><?php echo e(__('Pound (lb)')); ?></option>
                                                            <option value="Ounce (oz)"><?php echo e(__('Ounce (oz)')); ?></option>
                                                            <option value="Liter (L)"><?php echo e(__('Liter (L)')); ?></option>
                                                            <option value="Cubic meter (m3)"><?php echo e(__('Cubic meter (m3)')); ?></option>
                                                            <option value="Cubic foot (ft3)"><?php echo e(__('Cubic foot (ft3)')); ?></option>
                                                            <option value="gallon (gal)"><?php echo e(__('gallon (gal)')); ?></option>
                                                            <option value="Barrel (bbl)"><?php echo e(__('Barrel (bbl)')); ?></option>
                                                            <option value="Short ton (st)"><?php echo e(__('Short ton (st)')); ?></option>
                                                            <option value="Long ton (lt)"><?php echo e(__('Long ton (lt)')); ?></option>
                                                            <option value="Cubic inch (in3)"><?php echo e(__('Cubic inch (in3)')); ?></option>
                                                            <option value="Cubic centimeter (cm3)"><?php echo e(__('Cubic centimeter (cm3)')); ?></option>
                                                            <option value="Square meter (m2)"><?php echo e(__('Square meter (m2)')); ?></option>
                                                            <option value="Square foot (ft2)"><?php echo e(__('Square foot (ft2)')); ?></option>
                                                            <option value="Hectares (ha)"><?php echo e(__('Hectares (ha)')); ?></option>
                                                            <option value="Acre (ac)"><?php echo e(__('Acre (ac)')); ?></option>
                                                        </select>
                                                        <?php $__errorArgs = ['unit'];
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
                                                <button type="button" wire:click.prevent="storeIncident()" class="btn bg-gradient-primary"><?php echo e(__('Submit')); ?></button>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Date')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Time')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Location')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Description')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Material Type')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Quantity')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Unit')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Statu')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Creation Date')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Actions')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $incidents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $incident): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>#<?php echo e($incident->id); ?></td>
                                        <td><?php echo e($incident->date); ?></td>
                                        <td><?php echo e($incident->time); ?></td>
                                        <td><?php echo e($incident->location); ?></td>
                                        <td><?php echo e($incident->description); ?></td>
                                        <td><?php echo e($incident->material_type); ?></td>
                                        <td><?php echo e($incident->quantity); ?></td>
                                        <td><?php echo e($incident->unit); ?></td>
                                        <td><?php echo $incident->GetPrettyStatu(); ?></td>
                                        <td><?php echo e($incident->GetPrettyCreatedAttribute()); ?></td>
                                        <td>
                                            <!-- View Link -->
                                            <a href="<?php echo e(route('incident-management-show', $incident)); ?>" class="btn bg-gradient-primary btn-block mb-3"><?php echo e(__('View')); ?></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <?php echo e($incidents->links()); ?>

                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /var/www/html/klaus/mvp-green/resources/views/livewire/incident-management.blade.php ENDPATH**/ ?>