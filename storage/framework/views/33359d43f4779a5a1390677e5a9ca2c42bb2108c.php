<div class="main-content">
    <?php echo $__env->make('includes.alert-result', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0"><?php echo e(__('Data List')); ?></h5>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#NewData">
                            <?php echo e(__('New data')); ?>

                            </button>
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="NewData" tabindex="-1" role="dialog" aria-labelledby="NewData" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Create data emission')); ?></h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                <?php echo csrf_field(); ?> 
                                                
                                                <div class="form-group row<?php echo e($errors->has('emission_type') ? ' has-error' : ''); ?>">
                                                    <label for="measurement_unit"  class="col-md-4 control-label"><?php echo e(__('Emission type')); ?></label>
                                                
                                                    <div class="col-md-6">
                                                        <select class="form-control <?php $__errorArgs = ['emission_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  name="emission_type" id="emission_type"  wire:model="emission_type">
                                                            <option value="" ><?php echo e(__('Select Type')); ?></option>
                                                            <option value="CO2 (carbon dioxide)"><?php echo e(__('CO2 (carbon dioxide)')); ?></option>
                                                            <option value="CH4 (methane)"><?php echo e(__('CH4 (methane)')); ?></option>
                                                            <option value="N2O (nitrous oxide)"><?php echo e(__('N2O (nitrous oxide)')); ?></option>
                                                            <option value="SO2 (sulfur dioxide)"><?php echo e(__('SO2 (sulfur dioxide)')); ?></option>
                                                            <option value="NOx (nitrogen oxides)"><?php echo e(__('NOx (nitrogen oxides)')); ?></option>
                                                            <option value="PM (particulate matter)"><?php echo e(__('PM (particulate matter)')); ?></option>
                                                            <option value="VOCs (volatile organic compounds)"><?php echo e(__('VOCs (volatile organic compounds)')); ?></option>
                                                            <option value="HFCs (hydrofluorocarbons)"><?php echo e(__('HFCs (hydrofluorocarbons)')); ?></option>
                                                            <option value="PFCs (perfluorocarbons)"><?php echo e(__('PFCs (perfluorocarbons)')); ?></option>
                                                            <option value="SF6 (sulfur hexafluoride)"><?php echo e(__('SF6 (sulfur hexafluoride)')); ?></option>
                                                        </select>
                                                        <?php $__errorArgs = ['emission_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?><br/></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                            
                                                <div class="form-group row<?php echo e($errors->has('emission_source') ? ' has-error' : ''); ?>">
                                                    <label for="emission_source" class="col-md-4 control-label"><?php echo e(__('Emission source')); ?></label>
                            
                                                    <div class="col-md-6">
                                                        <input id="emission_source" type="text" class="form-control <?php echo e($errors->has('emission_source') ? ' is-invalid' : ''); ?>" name="emission_source" wire:model="emission_source" required>
                                                        <?php $__errorArgs = ['emission_source'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?><br/></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                            
                                                <div class="form-group row<?php echo e($errors->has('emission_location') ? ' has-error' : ''); ?>">
                                                    <label for="emission_location"  class="col-md-4 control-label"><?php echo e(__('Emission location')); ?></label>
                                                
                                                    <div class="col-md-6">
                                                        <input id="emission_location" type="text" class="form-control<?php echo e($errors->has('emission_location') ? ' is-invalid' : ''); ?>" name="emission_location" wire:model="emission_location" required autofocus>
                                                        <?php $__errorArgs = ['emission_location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?><br/></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row<?php echo e($errors->has('emission_amount') ? ' has-error' : ''); ?>">
                                                    <label for="emission_amount"  class="col-md-4 control-label"><?php echo e(__('Emission amount')); ?></label>
                                                
                                                    <div class="col-md-6">
                                                        <input id="emission_amount" type="number" class="form-control<?php echo e($errors->has('emission_amount') ? ' is-invalid' : ''); ?>" name="emission_amount" wire:model="emission_amount" required autofocus>
                                                        <?php $__errorArgs = ['emission_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?><br/></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row<?php echo e($errors->has('date_of_emission') ? ' has-error' : ''); ?>">
                                                    <label for="date_of_emission"  class="col-md-4 control-label"><?php echo e(__('Date of emission')); ?></label>
                                                
                                                    <div class="col-md-6">
                                                        <input id="date_of_emission" type="date" class="form-control<?php echo e($errors->has('date_of_emission') ? ' is-invalid' : ''); ?>" name="date_of_emission" wire:model="date_of_emission" required autofocus>
                                                        <?php $__errorArgs = ['date_of_emission'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?><br/></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row<?php echo e($errors->has('emission_comment') ? ' has-error' : ''); ?>">
                                                    <label for="emission_comment" class="col-md-4 control-label"><?php echo e(__('Comment')); ?></label>
                            
                                                    <div class="col-md-6">
                                                        <textarea id="emission_comment" class="form-control" name="emission_comment" wire:model="emission_comment" required></textarea>
                                                        <?php $__errorArgs = ['emission_comment'];
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
                                                <button type="button" wire:click.prevent="storeEmission()" class="btn bg-gradient-primary"><?php echo e(__('Submit')); ?></button>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Emission type')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Emission source')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Emission location')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Emission amount')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Date of emission')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Comment')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Actions')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $emissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>#<?php echo e($emission->id); ?></td>
                                        <td><?php echo e($emission->emission_type); ?></td>
                                        <td><?php echo e($emission->emission_source); ?></td>
                                        <td><?php echo e($emission->emission_location); ?></td>
                                        <td><?php echo e($emission->emission_amount); ?> <?php echo e(__('metric tons')); ?></td>
                                        <td><?php echo e($emission->date_of_emission); ?></td>
                                        <td><?php echo e($emission->emission_comment); ?></td>
                                        <td>
                                            <!-- View Link -->
                                            <a href="<?php echo e(route('data-management-show', $emission)); ?>" class="btn bg-gradient-primary btn-block mb-3"><?php echo e(__('View')); ?></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <?php echo e($emissions->links()); ?>

                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /var/www/html/klaus/mvp-green/resources/views/livewire/data-management.blade.php ENDPATH**/ ?>